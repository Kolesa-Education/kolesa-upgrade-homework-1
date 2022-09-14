<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (isset($a) && isset($b) && isset($c)) {
    
    if (!is_numeric($a) || !is_numeric($b)) {
        echo "Invalid Data";
        return;
    }

    echo calculate($a, $b, $c);
} else {
    echo "Input data is incomplete";
}

function calculate($a, $b, $operator)
{
    switch ($operator) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "/":
            if ($b==0) {
                return "No division by 0";
            } else {
                return $a / $b;
            } 
        case "mod":
            if ($b==0) {
                return "No modulo by 0";
            } else {
                return $a % $b;
            } 
        case "*":
            return $a * $b;
        case "^":
            return $a ** $b;
        case "?":
            if ($a > $b) {
                return $a." > ".$b;
            } else if ($a < $b) {
                return $a." < ".$b;
            } else {
                return $a." = ".$b;
            }
        case "%":
            if ($b < 0) {
                return "Percentage can't be negative";
            } else {
                return $a * $b / 100;
            } 
        default:
            return "Invalid Operation";
    }
}

?>