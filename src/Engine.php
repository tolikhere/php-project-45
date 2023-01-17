<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Greeting\greet;

function launchGame(string $question, int $rounds, string $gameFunc, array $numRange): void
{
    $isWin = true;
    $name = greet();
    $generate = '\BrainGames\Games' . $gameFunc;
    line($question);
    $expression = '';
    $correctAnswer = '';
    for ($i = 0; $i < $rounds; $i++) {
        if (is_callable($generate)) {
            [$expression, $correctAnswer] = $generate($numRange[0], $numRange[1]); // returning an array with
        }                                                                     //  an expression and a correct answer
        line("Question: %s", $expression);
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== (string) $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            $isWin = false;
            break;
        }

        line('Correct!');
    }

    if ($isWin) {
        line("Congratulations, %s!", $name);
    }
}
