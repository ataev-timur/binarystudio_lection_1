<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 14.06.2015
 * Time: 10:03
 */

namespace AtaevTimur\BinaryStudio\Cafe\Beverages;


class Dopp extends AbstractBeverage {
    public function __construct()
    {
        $this->name         = 'Доппио';
        $this->description  = 'Двойной эспрессо. Кофе эспрессо, приготовленный на двойном количестве молотого кофе и объемом в два раза больше стандартной порции эспрессо.';
        $this->recipe       = '(эспрессо + эспрессо)';
    }
} 