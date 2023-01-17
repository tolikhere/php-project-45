<?php

namespace BrainGames\Games\Even;

// the function generate an expression for the game and returning an array with an expression and a correct answer
function generateExpression(int $startRange, int $endRange): array
{
        $expression = mt_rand($startRange, $endRange);
        $answer = $expression % 2 === 0 ? 'yes' : 'no';

        return [$expression, $answer];
}
