<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
// mod - %25

$a = $_GET['a'] ?? null;
$b = $_GET['b'] ?? null;
$c = $_GET['c'] ?? null;

if ((is_null($a)) || (is_null($b)) || (is_null($c))) {
    echo "missing values";
    exit;
}


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