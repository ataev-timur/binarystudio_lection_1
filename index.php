<?php
require 'vendor/autoload.php';

use AtaevTimur\BinaryStudio\Mersenne\MersenneGenerator;

foreach(MersenneGenerator::generate(10) as $value) {
    echo $value . '<br>';
}