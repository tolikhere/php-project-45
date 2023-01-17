<?php

namespace BrainGames\Games\Prime;

// the function generate an expression for the game and returning an array with an expression and a correct answer
function generateExpression(int $startRange, int $endRange): array
{
        $expression = mt_rand($startRange, $endRange);
        $answer = isPrime($expression) ? 'yes' : 'no';

        return [$expression, $answer];
}

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }

    $ceiling = $num / 2;
    for ($i = 2; $i <= $ceiling; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
