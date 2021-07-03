<?php

namespace game;

use function cli\line;
use function cli\prompt;

function check()
{
    $isTrue = true;

    for ($i = 0; $i < 3; $i++) {
        $number = rand(0, 1000);
        $definentlyEven = ($number % 2) === 0;

        $answer = prompt("число четное?\n", $number);

        if ($answer === "yes" && $definentlyEven === true) {
            echo "RIGHT!", PHP_EOL;
        } else if ($answer === "no" && $definentlyEven === true) {
            echo "NOPE!", PHP_EOL;
            break;
        } else if ($answer === "yes" && $definentlyEven === false) {
            echo "NOPE!", PHP_EOL;
            break;
        } else if ($answer === "no" && $definentlyEven === false) {
            echo "RIGHT!", PHP_EOL;
        } else {
            echo "NOPE!", PHP_EOL;
            break;
        }
    }    
    return $isTrue;
}


while (!check()) {
    echo "REPEAT", PHP_EOL;
}

if (check()) {
    echo 'YEAAAAH ITS OVER', PHP_EOL;
}


