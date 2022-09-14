<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c']; // operation 

if (is_numeric($a) && is_numeric($b) ) {
    switch($c) {
        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "/":
            echo $a / $b;
            break;
        case "*":
            echo $a * $b;
            break;
        case "^":
            echo pow($a, $b);
            break;
        case "%":
            echo $a % $b;
            break;
        case ">":
            echo $a > $b;
            break;
        case "<":
            echo $a < $b;
            break;
        case "=":
            echo $a == $b;
            break;
        default:
            echo "no such operation";
    }
} else {
    echo "either a or b is not an integer or a float!";
}

?>