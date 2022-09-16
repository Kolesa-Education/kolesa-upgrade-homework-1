<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

// checking empty parametrs
if ($_GET['a'] == null || $_GET['b'] == null || $_GET['c'] == null) {
    echo "please insert all a,b,c";
    exit();
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

// list of mathematic opeations
$math_oper = array("-", urldecode("+"), "*", "/", "pow", ">", "<", "=", "%");

// validation inserted mathematic opeation
if (!in_array($c, $math_oper)) {
    echo "undefined operation, please choose from list: + - * / pow < > = %\n";
    exit();
}

// validation inserted numbers
if (!is_numeric($a) || !is_numeric($b)) {
    echo "inserted numbers non numeric";
    exit();
}

// calculate
if (in_array($c, $math_oper) && is_numeric($a) && is_numeric($b)) {
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