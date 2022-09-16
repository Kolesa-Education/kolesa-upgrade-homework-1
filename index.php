<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

// list of mathematic opeations
$math_oper = array("-", " ", "*", "/", "pow", ">", "<", "=", "%");

// validation inserted mathematic opeation
if (!in_array($c, $math_oper)) {
    echo "undefined operation, please choose from list: + - * / pow < > = %\n";
    exit();
}

// validation inserted numbers
$number_type_flag = false;

if (is_numeric($a) && is_numeric($b)) {
    $number_type_flag = true;
} else {
    echo "inserted numbers non numeric";
}

// calculate
if (in_array($c, $math_oper) && $number_type_flag) {
    switch ($c) {
        case urldecode("+"):
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "/":
            if ($b == 0) {
                echo "0 divide";
            } else {
                echo $a / $b;
            }
            break;
        case "*":
            echo $a * $b;
            break;
        case "pow":
            echo pow($a, $b);
            break;
        case ">":
            if ($a > $b) {
                echo "true";
            } else {
                echo "false";
            }
            break;
        case "<":
            if ($a < $b) {
                echo "true";
            } else {
                echo "false";
            }
            break;
        case "=":
            if ($a == $b) {
                echo "true";
            } else {
                echo "false";
            }
            break;
        case "%":
            echo $a * ($b / 100);
            break;
        default:
            echo "неправильная операция";
    }
}
?>