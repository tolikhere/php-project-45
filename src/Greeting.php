<?php

namespace BrainGames\Greeting;

use function cli\line;
use function cli\prompt;

//function greets and return player's name
function greet(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $name);
    return $name;
}
