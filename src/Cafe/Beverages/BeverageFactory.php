<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 22:59
 */

namespace AtaevTimur\BinaryStudio\Cafe\Beverages;


class BeverageFactory {
    public static function makeBeverage($name)
    {
        switch($name) :
            case 'эспрессо':
                return new Coffee;
                break;
            case 'доппио':
                return new Water;
                break;
            case 'американо':
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