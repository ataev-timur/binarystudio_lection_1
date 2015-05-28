<?php
/**
 * Created by PhpStorm.
 * User: ataev
 * Date: 28.05.2015
 * Time: 18:26
 */

namespace AtaevTimur\BinaryStudio\GameOfThrones;


abstract class Person {
    public static function whoami()
    {
        $reflection = new \ReflectionClass(static::class);
        return 'I\'m '. $reflection->getShortName() . ' from ' . substr($reflection->getNamespaceName(),strrpos($reflection->getNamespaceName(),'\\') + 1) . '.<br>';
    }
}