<?php
if (!empty($_GET['a']) && !empty($_GET['b']) && !empty($_GET['c'])) {
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
                echo ($b != 0) ? ($a / $b) : 'cannot divide by zero';
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
                echo ($a > $b) ? 'true' : 'false';
                break;
            case "<":
                echo ($a < $b) ? 'true' : 'false';
                break;
            case "=":
                echo ($a == $b) ? 'true' : 'false';
                break;
            default:
                echo "no such operation";
        }
    } else {
        echo "either a or b is not an integer or a float!";
    }
} else {
    echo "at least one of a, b, and c is undefined!";
}