<?php

$first = $_GET['first'];
$second = $_GET['second'];
$operator = $_GET['operator'];

if (!is_numeric($first) || !is_numeric($second)) {
    echo "check your input numbers";
}

switch ($operator) {
    case "plus": addition($first, $second); break;
    case "minus": subtraction($first, $second); break;
    case "multiply": multiplication($first, $second); break;
    case "divide": division($first, $second); break;
    case "power of": power($first, $second); break;
    case "modulus of": modulus($first, $second); break;
    case "bigger than": bigger($first, $second); break;
    case "less than": less($first, $second); break;
    case "equal to": equal($first, $second); break;
    case "percent of": percent($first, $second); break;
    default: echo "no such operation";

}

function addition(int $num1, int $num2) {
    echo $num1 + $num2;
}
function subtraction(int $num1, int $num2) {
    echo $num1 - $num2;
}
function multiplication(int $num1, int $num2) {
    echo $num1 * $num2;
}
function division(int $num1, int $num2) {
    if ($num2 == 0) {
        echo "Division by zero";
    }
    echo $num1 / $num2;
}

function power(int $num1, int $num2) {
    echo $num1 ** $num2;
}

function modulus(int $num1, int $num2) {
    if ($num2 == 0) {
        echo "Modulus by zero";
    }
    echo $num1 % $num2;
}

function bigger(int $num1, int $num2) {
    if ($num1 > $num2) {
        echo $num1 . " is bigger than " . $num2;
    }else {
        echo $num1 . " is not bigger than " . $num2;
    }
}
function less(int $num1, int $num2) {

    if ( $num1 < $num2) {
        echo $num1 . " is less than " . $num2;
    }else {
        echo $num1 . " is not less than " . $num2;
    }
}
function equal(int $num1, int $num2) {
    if ( $num1 == $num2) {
        echo $num1 . " is equal to " . $num2;
    } else {
        echo $num1 . " is not equal to " . $num2;
    }
}

function percent(int $num1, int $num2) {
    echo $num2 * $num1 / 100;
}
?>



