<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:16
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Solid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class Sugar extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'сахар';
        $this->kCalories = 398;
    }
} 