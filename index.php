<?php
require 'vendor/autoload.php';

use AtaevTimur\BinaryStudio\GameOfThrones\Crowlands\BaratheonOfKingsLanding\TommenBaratheon;
use AtaevTimur\BinaryStudio\GameOfThrones\Dorne\Martell\DoranMartell;
use AtaevTimur\BinaryStudio\GameOfThrones\Riverlands\Harrenhal\PetyrBaelish;
use AtaevTimur\BinaryStudio\GameOfThrones\Stormlands\BaratheonOfStormsEnd\TommenI;
use AtaevTimur\BinaryStudio\GameOfThrones\Westerlands\Lannister\CerseiLannister;
use AtaevTimur\BinaryStudio\Mersenne\MersenneGenerator;

echo TommenBaratheon::whoami(), PHP_EOL;
echo DoranMartell::whoami(), PHP_EOL;
echo PetyrBaelish::whoami(), PHP_EOL;
echo TommenI::whoami(), PHP_EOL;
echo CerseiLannister::whoami(), PHP_EOL;

foreach(MersenneGenerator::generate(10) as $value) {
    echo $value . ', ';
}
