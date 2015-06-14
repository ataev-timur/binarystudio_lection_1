<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:24
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Solid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class Chocolate extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'шоколад';
        $this->kCalories = 544;
    }
}