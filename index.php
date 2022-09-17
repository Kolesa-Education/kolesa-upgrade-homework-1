<?php

// %2B => +
// %2A => *
// %2F => /
// %2D => -
// %25 => %

if (!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['c']) ){
    echo 'Параметры не передаются';
    return;
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (!is_numeric($a) || !is_numeric($b)) {
    echo 'Параметры a и b должны быть числами';
    return;
} 

if ($c == '/' && $b == 0) {
    echo 'На ноль делить нельзя фу таким быть';
    return;
}

switch ($c):
    case "+":
        echo '$a + $b = ' . ($a + $b);
        break;
    case "-":
        echo '$a - $b = ' . ($a - $b);
        break;
    case "/":
        echo '$a / $b = ' . ($a / $b);
        break;
    case "*":
        echo '$a * $b = ' . ($a * $b);
        break;
    case "%":
        echo '$a % $b = ' . ($a % $b);
        break;
    case "**":
        echo '$a ** $b = ' . ($a ** $b);
        break;
    case "max":
        echo 'max($a, $b) = ' . max($a, $b);
        break;
    case "min":
        echo 'min($a, $b) = ' . min($a, $b);
        break;
    case "log":
        echo 'log($a, $b) = ' . log($a, $b);
        break;
    case "type":
        echo 'type a' . gettype($a);
        break;
    default:
        echo "Не правильная операция";
endswitch;