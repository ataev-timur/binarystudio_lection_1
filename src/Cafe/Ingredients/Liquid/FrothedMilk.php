<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:15
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class FrothedMilk extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'взбитое молоко';
        $this->kCalories = 64;
    }
} 