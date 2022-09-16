<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
// %25 => %
// %3E => >

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (!isset($a, $b, $c)) {
  echo "Отсутствует параметр a, b или с";
  exit;
} elseif (!is_numeric($a) || !is_numeric($b)) {
  echo "Параметры a и b должны быть цифрами";
  exit;
} else {
  echo "Валидация успешна \n";
}

switch ($c) {
    case "+":
       echo $a + $b;
        break;
    case "-":
       echo $a - $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "^":
        echo pow($a, $b);
        break;
    case "/":
        echo $a / $b;
        break;
    case ">":
        if ($a > $b) {
            echo ($a . " больше чем " . $b);
        } elseif ($a === $b) {
            echo "Введенные значения равны";
        } else {
            echo $a . " меньше чем " . $b;
        }
        break;
    case "%":
        echo $b . "% из " . $a . " равно " . ($b / 100) * $a;
        break;
    default:
        echo "Неправильная операция";
}

?>