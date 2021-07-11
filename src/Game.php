<?php

namespace game;

use function cli\line;
use function cli\prompt;


function check()
{
    $isTrue = true;
    $count = 0;
    while ($isTrue) {
        $number = rand(0, 1000);
        $definentlyEven = ($number % 2) === 0;

        $answer = prompt("число четное?\n", $number);

        if ($answer === "yes" && $definentlyEven === true) {
            echo "RIGHT!", PHP_EOL;
            $count += 1;
            if ($count === 3) {
                echo 'congrats', PHP_EOL;
                return false;
            }
        } else if ($answer === "no" && $definentlyEven === true) {
            echo "NOPE! THREE TIMES MORE", PHP_EOL;
            $count = 0;
        } else if ($answer === "yes" && $definentlyEven === false) {
            echo "NOPE!THREE TIMES MORE", PHP_EOL;
            $count = 0;
        } else if ($answer === "no" && $definentlyEven === false) {
            echo "RIGHT!", PHP_EOL;
            $count += 1;
            if ($count === 3) {
                echo 'congrats', PHP_EOL;
                return false;
            }
        } else {
            echo "NOPE!THREE TIMES MORE", PHP_EOL;
            $count = 0;
        }
    }    

    return $isTrue;
} 