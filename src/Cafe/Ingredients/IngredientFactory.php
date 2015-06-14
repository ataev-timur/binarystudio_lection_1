<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 12:52
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid\FrothedMilk;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid\Milk;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid\Water;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid\WhippedCream;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid\Whiskey;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\Solid\Chocolate;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\Solid\Coffee;
use AtaevTimur\BinaryStudio\Cafe\Ingredients\Solid\Sugar;

class IngredientFactory {
    public static function makeIngredient($name)
    {
        switch($name) :
            case 'кофе':
                return new Coffee;
                break;
            case 'вода':
                return new Water;
                break;
            case 'молоко':
                return new Milk;
                break;
            case 'взбитое молоко':
                return new FrothedMilk;
                break;
            case 'сахар':
                return new Sugar;
                break;
            case 'взбитые сливки':
                return new WhippedCream;
                break;
            case 'виски':
                return new Whiskey;
                break;
            case 'шоколад':
                return new Chocolate;
                break;
            default:
                throw new \Exception('Невозможно создать ингредиент.', 1);
                break;
        endswitch;
    }
} 