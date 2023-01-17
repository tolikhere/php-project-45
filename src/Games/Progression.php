<?php

namespace BrainGames\Games\Progression;

// the function generate an expression for the game and returning an array with an expression and a correct answer
function generateExpression($startRange, $endRange)
{
    $firstNum = mt_rand($startRange, $endRange);
    $increment = mt_rand(1, 10);
    $ceiling = mt_rand(5, 10);
    $progression = [];
    for ($i = 0; $i < $ceiling; $i++) {
        $progression[] = $firstNum + $increment * $i;
    }
    $randomIndex = array_rand($progression);
    $answer = $progression[$randomIndex];
    $progression[$randomIndex] = '..';
    $expression = implode(' ', $progression);

    return [$expression, $answer];
}
