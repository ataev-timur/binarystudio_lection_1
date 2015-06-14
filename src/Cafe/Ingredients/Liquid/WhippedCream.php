<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:21
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class WhippedCream extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'взбитые сливки';
        $this->kCalories = 257;
    }
} 