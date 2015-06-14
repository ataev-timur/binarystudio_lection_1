<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 21:44
 */

namespace AtaevTimur\BinaryStudio\Cafe\Beverages;


class Espresso extends AbstractBeverage {
    public function __construct()
    {
        $this->name         = 'Эспрессо';
        $this->description  = 'Напиток из кофе, приготовленный путём пропускания горячей (около 90 °C) и находящейся под давлением 9 бар воды через фильтр с молотым кофе. Напиток пользуется огромной популярностью во всём мире и, прежде всего, на юге Европы — в Италии и Португалии.';
        $this->recipe       = '(кофе + вода)';
    }
} 