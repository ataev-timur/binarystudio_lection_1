<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:00
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class Milk extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'молоко';
        $this->kCalories = 64;
    }
}