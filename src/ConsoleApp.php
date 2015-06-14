<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 13.06.2015
 * Time: 12:17
 */

namespace AtaevTimur\BinaryStudio;


use AtaevTimur\BinaryStudio\Cafe\CoffeeMachine;

class ConsoleApp {
    public static function run()
    {
        $coffeeMachine = new CoffeeMachine;
        while($line = trim(fgets(STDIN))){
            try {
                if ($line == 'exit')
                    break;
                else
                    $coffeeMachine->customerChoice($line);
            } catch(\Exception $exception) {
                $message = $exception->getMessage();
                fwrite(STDOUT, "$message\n");
            }

        }
    }
} 