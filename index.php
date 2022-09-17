<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if(!is_numeric($a)) {
    echo "invalid first operand";
} else if(!is_numeric($b)){
    echo "invalid second operand";
} else if($c != "-" && $c != "+" && $c != "/" && $c != "=="
    && $c != "*" && $c != "^" && $c != ">" && $c != "<") {
    echo "invalid operator";
} else {
    switch ($c) {
    case "-":
        echo $a - $b;
        break;
    case "+":
        echo $a + $b;
        break;
    case "/":
        if($b == 0) {
            echo "cannot devide by 0";
            break;
        }
        echo $a / $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "^":
        echo pow($a, $b);
        break;
    case ">":
        echo $a > $b ? "true" : "false";
        break;
    case "<":
        echo $a < $b ? "true" : "false";
        break;
    case "==":
        echo $a == $b ? "true" : "false";
        break;
    default:
        echo "incorrect operation";
    }
}
?>