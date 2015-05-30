<?php
/**
 * Created by PhpStorm.
 * User: ataev
 * Date: 28.05.2015
 * Time: 15:55
 */

namespace AtaevTimur\BinaryStudio\Quote;

/**
 * Class RandomQuote
 * Трейт случайной цитаты
 * @package AtaevTimur\BinaryStudio\Quote
 */
trait RandomQuote {
    public $quotes = [
        'У меня есть два заместителя, четыре из которых…',
        'Не все могут смотреть в завтрашний день.',
        'Киевлянам нужно готовиться к земле.',
        'У нас есть что было, и нужно смотреть какой мы можем.',
        'Я встречался с погибшими милиционерами и демонстрантами.',
        'Он окрасил себя в те цвета, в которые он окрасил себя.',
        'Фёст оф ол.',
        'Будь проще и говори на понятном для людей языке.'
    ];

    public function getQuote()
    {
        return $this->quotes[rand(0, count($this->quotes) - 1)];
    }
}