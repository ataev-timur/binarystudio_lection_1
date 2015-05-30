<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 30.05.2015
 * Time: 16:35
 */

namespace AtaevTimur\BinaryStudio;

use AtaevTimur\BinaryStudio\GameOfThrones\Crowlands\BaratheonOfKingsLanding\TommenBaratheon;
use AtaevTimur\BinaryStudio\GameOfThrones\Dorne\Martell\DoranMartell;
use AtaevTimur\BinaryStudio\GameOfThrones\Riverlands\Harrenhal\PetyrBaelish;
use AtaevTimur\BinaryStudio\GameOfThrones\Stormlands\BaratheonOfStormsEnd\TommenI;
use AtaevTimur\BinaryStudio\GameOfThrones\Westerlands\Lannister\CerseiLannister;
use AtaevTimur\BinaryStudio\Mersenne\MersenneGenerator;
use AtaevTimur\BinaryStudio\Quote\Greeting;

/**
 * Class Application
 * Отвечает за приложение
 * @package AtaevTimur\BinaryStudio
 */
class Application {
    /**
     * Метод запускающий приложение.
     * Вызов методов реализующих решение поставленых задач.
     */
    public static function run()
    {
        echo TommenBaratheon::whoami(), PHP_EOL;
        echo DoranMartell::whoami(), PHP_EOL;
        echo PetyrBaelish::whoami(), PHP_EOL;
        echo TommenI::whoami(), PHP_EOL;
        echo CerseiLannister::whoami(), PHP_EOL;
        echo '<br>';

        $greeting = new Greeting();
        $greeting->say('Timur');
        echo '<br><br>';

        foreach(MersenneGenerator::generate(10) as $value) {
            echo $value . ', ';
        }
    }
} 