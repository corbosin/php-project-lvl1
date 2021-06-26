<?php
namespace click;

use function cli\line;
use function cli\prompt;
 
function greeting() //function for answer
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}