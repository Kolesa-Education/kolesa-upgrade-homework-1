<?php

namespace App\Calculator;

function calculate(float $firstArg, float $secondArg, string $operator): float|string
{
    switch ($operator) {
        case '+':
            return $firstArg + $secondArg;
        case '*';
            return $firstArg * $secondArg;
        case "/":
            if ($secondArg === 0.0) {
                return 'Division by zero is undefined';
            }
            return $firstArg / $secondArg;
        case '-':
            return $firstArg - $secondArg;
        case '^':
            return pow($firstArg, $secondArg);
        case '%':
            return $firstArg / 100 * $secondArg;
        case '!':
            return $firstArg ** (1 / $secondArg);
        case '?':
            if ($firstArg === $secondArg) {
                return 'values are similar';
            }
            if ($firstArg > $secondArg) {
                return $firstArg;
            }
            return $secondArg;
        case 'log':
            return log($firstArg, $secondArg);
        default:
            return 'invalid operation';
    }
}
