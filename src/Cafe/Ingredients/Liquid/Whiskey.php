<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:23
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients\Liquid;


use AtaevTimur\BinaryStudio\Cafe\Ingredients\AbstractIngredient;

class Whiskey extends AbstractIngredient {
    public function __construct()
    {
        $this->name = 'виски';
        $this->kCalories = 235;
    }
} 