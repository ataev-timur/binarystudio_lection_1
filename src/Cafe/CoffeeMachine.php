<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 12.06.2015
 * Time: 23:59
 */

namespace AtaevTimur\BinaryStudio\Cafe;

use AtaevTimur\BinaryStudio\Cafe\Beverages\AbstractBeverage;
use AtaevTimur\BinaryStudio\Cafe\Beverages\Americano;
use AtaevTimur\BinaryStudio\Cafe\Beverages\Cappuccino;
use AtaevTimur\BinaryStudio\Cafe\Beverages\Dopp;
use AtaevTimur\BinaryStudio\Cafe\Beverages\Espresso;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\IngredientFactory;


class CoffeeMachine {

    /** @var array Массив ингредиентов загруженных в машину */
    private $ingredients;

    /** @var array Массив предустановленных напитков */
    private $beverages;

    private $neededIngredients;

    public function __construct()
    {
        echo 'Здравствуйте, что бы приготовить напиток вам необходимо загрузить ингредиенты и выбрать тип напитка.', PHP_EOL;
        echo 'В машину можно загружать следующие ингредиенты:', PHP_EOL;
        echo 'кофе, вода, молоко, взбитое молоко, сахар, взбитые сливки, виски, шоколад', PHP_EOL;
        echo 'На данный момент кофе машина пуста.', PHP_EOL;
        echo 'Что бы загрузить ингредиент или создать напиток просто введите его название.', PHP_EOL;

        foreach (['кофе', 'вода', 'молоко', 'взбитое молоко', 'сахар', 'взбитые сливки', 'виски', 'шоколад'] as $ingredient) {
            $this->ingredients[$ingredient] = ['count' => 0, 'objects' => [] ];
        }

        foreach (['эспрессо', 'доппио', 'американо', 'каппучино'] as $beverage) {
            list($recipe, $class) = $this->setRecipe($beverage);
            $this->beverages[$beverage] = ['recipe' => $recipe, 'class' => $class, 'done' => 0];
        }

    }

    public function addBeverage($name, $recipe, $class)
    {
        if (empty($this->beverages[$name])) {
            if (is_array($recipe)) {
                $this->beverages[$name]['recipe'] = $recipe;
            } elseif (is_string($recipe)) {
                $this->beverages[$name]['recipe'] = explode(' + ', $recipe);
            }
            $this->beverages[$name]['class'] = $class;
        }
    }

    private function setRecipe($beverage)
    {
        switch ($beverage) :
            case 'эспрессо':
                return [['кофе', 'вода'], Espresso::class];
            case 'доппио':
                return [['эспрессо', 'эспрессо'], Dopp::class];
            case 'американо':
                return [['эспрессо', 'вода'], Americano::class];
            case 'каппучино':
                return [['эспрессо', 'молоко', 'взбитое молоко'], Cappuccino::class];
            default:
                throw new \Exception('Нет такого рецепта.');
        endswitch;
    }

    public function customerChoice($value) {
        $value = filter_var(mb_strtolower($value), FILTER_SANITIZE_STRING);
        if (array_key_exists($value, $this->ingredients)) {
            $this->pushIngredient($value);
        } elseif (array_key_exists($value, $this->beverages)) {
            $this->makeBeverage($value);
        } else {
            throw new \Exception('Что-то не то!', 101);
        }
    }

    private function pushIngredient($name)
    {
        try {
            $ingredient = IngredientFactory::makeIngredient($name);
            $name = $ingredient->getName();
            $this->ingredients[$name]['count']++;
            $this->ingredients[$name]['objects'][] = $ingredient;
            $count = $this->getCountOfIngredient($name);
            fwrite(STDOUT, "Ингредиент: $name добавлен.\n");
            fwrite(STDOUT, "Теперь количество $name в машине равно: $count.\n");
        } catch (\Exception $exception) {
            if ($exception->getCode() == 1) {
                throw new \Exception('Невозможно загрузить данный тип игредиента.', 2);
            }
            throw new \Exception('Непредвиденная ошибка.', 100);
        }
    }

    private function popIngredient($name)
    {
        if ($this->ingredients[$name]['count'] != 0) {
            $this->ingredients[$name]['count']--;
            unset($this->ingredients[$name]['objects'][0]);
        }
    }

    private function makeBeverage($name)
    {
        try {
            $this->neededIngredients = $this->defineNeededIngredients($name);
            $this->isEnoughIngredients();
            $this->useIngredients();
            $class = $this->beverages[$name]['class'];
            /** @var AbstractBeverage $beverage */
            $beverage = new $class;
            echo 'Приготовлена одна порция: ';
            echo $beverage->getName(), PHP_EOL;
            echo $beverage->getDescription(), PHP_EOL;
            echo $beverage->getRecipe(), PHP_EOL;
        } catch(\Exception $exception) {
            echo $exception->getMessage(), PHP_EOL;
        }
    }

    private function defineNeededIngredients($beverage)
    {
        $ingredients = $this->beverages[$beverage]['recipe'];
        $needed = [];
        foreach ($ingredients as $ingredient) {
            if (array_key_exists($ingredient, $this->ingredients)) {
                $needed[$ingredient] += 1;
            } elseif (array_key_exists($ingredient, $this->beverages)) {
                foreach($this->defineNeededIngredients($ingredient) as $key => $value) {
                    $needed[$key] += $value;
                }
            }
        }
        return $needed;
    }

    private function isEnoughIngredients()
    {
        foreach ($this->neededIngredients as $key => $value) {
            if ($this->ingredients[$key]['count'] < $value) {
                throw new \Exception('Не достаточно ингредиентов в машине. Загрузите ингредиент.');
            }
        }
    }

    private function useIngredients()
    {
        foreach ($this->neededIngredients as $key => $value) {
            for ($i = 0; $i < $value; $i++) {
                $this->popIngredient($key);
            }
        }
    }

    private function getCountOfIngredient($name)
    {
        return $this->ingredients[$name]['count'];
    }
} 