<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:00
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class Water extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'вода';
        $this->kCalories = 0;
    }
} 