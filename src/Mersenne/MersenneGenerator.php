<?php
/**
 * Created by PhpStorm.
 * User: ataev
 * Date: 28.05.2015
 * Time: 15:54
 */

namespace AtaevTimur\BinaryStudio\Mersenne;


class MersenneGenerator {

    public static function generate($num) {
        for ($i = 1; $i <= $num; $i++) {
            yield 2 ** $i - 1;
        }
    }
}