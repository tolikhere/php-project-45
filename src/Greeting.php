<?php

namespace BrainGames\Greeting;

use function cli\line;
use function cli\prompt;

//function greets and return player's name
function greet()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?', false, ' ');
    line("Hello, %s!", $name);
    return $name;
}
