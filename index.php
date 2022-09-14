<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
// mod - %25

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

switch ($c) {
    case '+':
        echo $a + $b;# code...
        break;
    case '-':
        echo $a - $b;# code...
        break;
    case '*':
        echo $a * $b;# code...
        break;
    case '/':
        if ($b == 0) {
            echo "no division by zero";
            break;
        }
        echo $a / $b;# code...
        break;
    case '%':
        if ($b == 0) {
            echo "no module by zero";
            break;
        }
        echo $a * ($b / 100);# code...
        break;
    default:
        echo "wrong operator";
}

?>