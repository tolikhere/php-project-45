<?php

namespace BrainGames\Games\Calculator;

// the function generate an expression for the game and returning an array with an expression and a correct answer
function generateExpression(int $startRange, int $endRange): array
{
    $a = mt_rand($startRange, $endRange);
    $b = mt_rand($startRange, $endRange);
    $sign = array_rand(['+' => 'sum', '-' => 'subtract', '*' => 'multiply']);
    $answer = calculate($a, $b, $sign);
    $expression = "{$a} {$sign} {$b}";
    return [$expression, $answer];
}

function calculate(int $a, int $b, string $sign): int
{
    switch ($sign) {
        case '*':
            $result =  $a * $b;
            break;
        case '+':
            $result =  $a + $b;
            break;
        case '-':
            $result =  $a - $b;
            break;
    }

    return $result;
}
