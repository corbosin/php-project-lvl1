<?php

    namespace game;

use function cli\line;
use function cli\prompt;


function gcd($a, $b) 
{
    {
        return ($a % $b) ? gcd($b, $a % $b) : $b;
    }
}


function gcdStart() //helps to find Greatest Common Divisor
{
    $isTrue = true;
    $count = 0;
    while ($isTrue) {
        $numberOne = rand(1, 20);
        $numberTwo = rand(1, 20);
        $greatestDivisor = gcd($numberOne, $numberTwo);
        echo $numberOne;
        echo ' ';
        echo $numberTwo, PHP_EOL;
        $answer = prompt("Найдите наибольший общий делитель двух вышеуказанных чисел\n");
        

        if ($greatestDivisor == $answer) {
            echo "RIGHT!", PHP_EOL;
            echo PHP_EOL;
            echo "---------------------------------------------", PHP_EOL;
            echo PHP_EOL;
            $count += 1;
            if ($count === 3) {
                echo 'congrats', PHP_EOL;
                return false;
            }
                } else {
            echo "NOPE! THREE TIMES MORE", PHP_EOL;
            echo PHP_EOL;
            echo "---------------------------------------------", PHP_EOL;
            echo PHP_EOL;
            $count = 0;
                }
    }
    return $isTrue;
}