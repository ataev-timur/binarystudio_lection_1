<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 14:01
 */

namespace AtaevTimur\BinaryStudio\Cafe\Ingredients;


abstract class AbstractIngredient {
    protected $name;
    protected $kCalories;

    public function getName()
    {
        return $this->name;
    }
}