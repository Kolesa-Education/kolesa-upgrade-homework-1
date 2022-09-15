<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
// mod - %25

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$regex = '/^[-+]?(\d*[.])?\d+$/';

if ((!preg_match($regex, $a)) || (!preg_match($regex, $b))) {
    echo "values \"a\" or \"b\" should be numeric";
    exit;
}

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