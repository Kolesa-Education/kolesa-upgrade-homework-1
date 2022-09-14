<?php

// %2B => +
// %2A => *
// %2F => /
// %2D => -
// %25 => %

$a = $_GET['a'] ?? false;
$b = $_GET['b'] ?? false;
$c = $_GET['c'] ?? false;

if (!$a || !$b || !$c) {
    echo 'отсутствует один из параметров a, b или c';
    return;
} elseif (!is_numeric($a) || !is_numeric($b)) {
    echo 'параметры a и b должны быть числами';
    return;
} else {
//    echo 'валидация прошла успешно' . PHP_EOL;
//    echo $a . ' ' . $b . ' ' . $c . PHP_EOL;
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
    case "atan2":
        echo 'atan2($a, $b) = ' . atan2($a, $b);
        break;
    case "hypot":
        echo 'hypot($a, $b) = ' . hypot($a, $b);
        break;
    case "fmod":
        echo 'fmod($a, $b) = ' . fmod($a, $b);
        break;
    default:
        echo "не правильная операция";
endswitch;