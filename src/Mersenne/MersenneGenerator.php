<?php
/**
 * Created by PhpStorm.
 * User: ataev
 * Date: 28.05.2015
 * Time: 15:54
 */

namespace AtaevTimur\BinaryStudio\Mersenne;

/**
 * Class MersenneGenerator
 * Генератор числового ряда Мерсена
 * @package AtaevTimur\BinaryStudio\Mersenne
 */
class MersenneGenerator {

    /**
     * @param int $num - длина ряда.
     */
    public static function generate($num) {
        for ($i = 1; $i <= (int)$num; $i++) {
            yield 2 ** $i - 1;
        }
    }
}