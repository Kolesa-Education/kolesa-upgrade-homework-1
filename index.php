<?php

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
        echo $a / $b;# code...
        break;
    default:
        echo "wrong operator";
}

?>