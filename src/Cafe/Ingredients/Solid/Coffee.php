<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:00
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Solid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class Coffee extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'кофе';
        $this->kCalories = 2;
    }
} 