<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

// the function generate an expression for the game and returning an array with an expression and a correct answer
function generateExpression($startRange, $endRange)
{
        $randomNum = mt_rand($startRange, $endRange);
        $correctAnswer = $randomNum % 2 === 0 ? 'yes' : 'no';

        return [$randomNum, $correctAnswer];
}
