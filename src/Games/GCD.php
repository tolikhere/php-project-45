<?php

namespace BrainGames\Games\GCD;

// the function generate an expression for the game and returning an array with an expression and a correct answer
function generateExpression($startRange, $endRange)
{
        $a = mt_rand($startRange, $endRange);
        $b = mt_rand($startRange, $endRange);
        $expression = "{$a} {$b}";
        $answer = gcd($a, $b);

        return [$expression, (string) $answer];
}

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}
