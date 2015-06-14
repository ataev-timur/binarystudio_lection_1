<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 21:45
 */

namespace AtaevTimur\BinaryStudio\Cafe\Beverages;


class AbstractBeverage {
    protected $name;
    protected $description;
    protected $recipe;

    public function getDescription()
    {
        return $this->description;
    }

    public function getRecipe()
    {
        return $this->recipe;
    }

    public function getName()
    {
        return $this->name;
    }
} 