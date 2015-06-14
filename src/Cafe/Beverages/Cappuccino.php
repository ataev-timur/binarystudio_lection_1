<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 14.06.2015
 * Time: 10:03
 */

namespace AtaevTimur\BinaryStudio\Cafe\Beverages;


class Cappuccino extends AbstractBeverage {
    public function __construct()
    {
        $this->name         = 'Капучино';
        $this->description  = 'Кофейный напиток итальянской кухни на основе эспрессо с добавлением молока и молочной пенки.';
        $this->recipe       = '(эспрессо + молоко + взбитое молоко)';
    }
} 