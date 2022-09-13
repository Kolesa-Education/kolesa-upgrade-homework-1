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
$b = $_GET['b'];
$c = $_GET['c'];

/**
* Calc function contains The Calculator App main logic
* @param takes 2 required args: $a and $c,
* and 1 optinal arg - $b (if you want to get square root).
* @return the calculated result of the operation
**/
function calc($a, $b = null, string $c) {
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

/**
* Main function
* with ZeroDivisionError Exception Handling
**/
function main() {
    global $a, $b, $c;
    try {
        $result = calc($a, $b, $c);
        print_r($result);
    } catch (DivisionByZeroError $e) {
        print_r("You must not divide by zero!");
    }
}

// Checking args and start main func
if (is_numeric($a) && is_numeric($b)) {
    main();
} else {
    print_r("Invalid Arguments!");
}

?>
