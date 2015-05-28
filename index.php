<?php
require 'vendor/autoload.php';

use AtaevTimur\BinaryStudio\Mersenne\MersenneGenerator;

foreach(MersenneGenerator::generate(10) as $value) {
    echo $value . '<br>';
}

echo \AtaevTimur\BinaryStudio\GameOfThrones\Crowlands\BaratheonOfKingsLanding\TommenBaratheon::whoami(), PHP_EOL;
echo \AtaevTimur\BinaryStudio\GameOfThrones\Dorne\Martell\DoranMartell::whoami(), PHP_EOL;
echo \AtaevTimur\BinaryStudio\GameOfThrones\Riverlands\Harrenhal\PetyrBaelish::whoami(), PHP_EOL;
echo \AtaevTimur\BinaryStudio\GameOfThrones\Stormlands\BaratheonOfStormsEnd\TommenI::whoami(), PHP_EOL;
echo \AtaevTimur\BinaryStudio\GameOfThrones\Westerlands\Lannister\CerseiLannister::whoami(), PHP_EOL;
