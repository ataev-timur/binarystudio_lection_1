<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 14.06.2015
 * Time: 10:03
 */

namespace AtaevTimur\BinaryStudio\Cafe\Beverages;


class Americano extends AbstractBeverage {
    public function __construct()
    {
        $this->name         = 'Американо';
        $this->description  = 'Кофе по-американски, регулярный кофе - получил свое название, так как был широко популярен в Северной Америке.';
        $this->recipe       = '(эспрессо + вода)';
    }
} 