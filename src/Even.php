<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Greeting\greet;

function startGame($numOfQuestions, $startRange, $endRange)
{
    $isWin = true;
    $name = greet();

    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < $numOfQuestions; $i++) {
        $randomNum = rand($startRange, $endRange);
        $correctAnswer = $randomNum % 2 === 0 ? 'yes' : 'no';
        line("Question: %d", $randomNum);
        $userAnswer = prompt('Your answer');

        if ($userAnswer !== $correctAnswer) {
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
