<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 30.05.2015
 * Time: 15:32
 */

namespace AtaevTimur\BinaryStudio\Quote;

/**
 * Class Greeting
 * Класс отвечающий за приветствие пользователя
 * @package AtaevTimur\BinaryStudio\Quote
 */
class Greeting {
    use RandomQuote;

    /**
     * Приветствие пользователя
     * @param string $name - Имя пользователя
     */
    public function say($name)
    {
       echo 'Hi, ' .$name. '! There is a new quote for you: <br>' . $this->getQuote();
    }
} 