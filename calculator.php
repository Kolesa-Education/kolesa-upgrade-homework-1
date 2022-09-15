<?php

// What's up! This is eugenenazirov's version of Calc App
// Made on Kolesa Backend Upgrade 2022

// URL Decode Operators:
// %2B => +
// %2A => *
// %2F => /
// -   => -
// &#8730; => √

$a = $_GET['a'];
$b = $_GET['b'] ?? null;
$c = $_GET['c'];

/**
* Calc function contains The Calculator App main logic
* @param takes 2 required args: $a and $c,
* and 1 optinal arg - $b (if you want to get square root).
* @return the calculated result of the operation
**/
function calc($a, string $c, $b = null) {
    return match ($c) {
        "add", "+" => $a + $b,
        "subtract", "-" => $a - $b,
        "divide", "/" => $a / $b,
        "multiply", "*" => $a * $b,
        "pow", "**" => $a ** $b,
        "sqrt", "√" => sqrt($a),
        default => "Invalid Operation",
    };
}

function isArgsCorrect($a, $b) {
    return is_numeric($a) && is_numeric($b) OR $b === null;
}

// Checking args and start main func
// with ZeroDivisionError Exception Handling
if (!isArgsCorrect($a, $b)) {
    echo 'Invalid Arguments!';
} else {
    try {
        $result = calc($a, $c, $b);
        echo $result;
    } catch (DivisionByZeroError $e) {
        echo "You must not divide by zero!";
    }
}
