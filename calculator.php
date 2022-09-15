<?php

// %2B => +
// %2A => *
// %2F => /
// - => -

if (empty($_GET)) {
    echo '$_GET is empty';
    die();
}

if (!isset($_GET['firstArgument']) || !isset($_GET['secondArgument']) || !isset($_GET['operation'])) {
    echo 'Some arguments are missing';
    die();
}

$firstArgument = $_GET['firstArgument'];
$secondArgument = $_GET['secondArgument'];
$operation = $_GET['operation'];

if (!is_numeric($firstArgument) || !is_numeric($secondArgument)) {
    echo 'Argument is not a numeric';
    die();
}

switch ($operation) {
    case urldecode('+'):
        echo $firstArgument + $secondArgument;
        break;

    case '-':
        echo $firstArgument - $secondArgument;
        break;

    case '/':
        if ($secondArgument != 0) {
            echo $firstArgument / $secondArgument;
        } else echo 'Division by zero';
        break;

    case '*':
        echo $firstArgument * $secondArgument;
        break;

    case '%':
        echo $firstArgument * ($secondArgument / 100);
        break;

    case '^':
        echo pow($firstArgument, $secondArgument);
        break;

    case '>':
        if ($firstArgument > $secondArgument) {
            echo 'First argument greater than second';
        } else echo 'First argument less than second';
        break;

    case '<':
        if ($firstArgument < $secondArgument) {
            echo 'First argument less than second';
        } else echo 'First argument greater than second';
        break;

    case '=':
        if ($firstArgument == $secondArgument) {
            echo 'First argument and second are equal';
        } else echo 'First argument and second are not equal';
        break;

    case '<=':
        if ($firstArgument <= $secondArgument) {
            echo 'First argument less than or equal to the second';
        } else echo 'First argument not less than or not equal to the second';
        break;

    case '>=':
        if ($firstArgument >= $secondArgument) {
            echo 'First argument greater than or equal to the second';
        } else echo 'First argument not greater than or not equal to the second';
        break;

    default:
        echo 'Invalid operation';
}