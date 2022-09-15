<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];


if (is_numeric($a) && is_numeric($b)) {
    switch ($c) {
        case " ":
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
        case "<":
            if ($a < $b) {
                echo ($a . " меньше чем " . $b);
            } elseif ($a === $b) {
                echo "Введенные значения равны";
            } else {
                echo $a . " больше чем " . $b;
            }
            break;
        case "%":
            echo $b . "% из " . $a . " равно " . ($b / 100) * $a;
            break;
        default:
            echo "Неправильная операция";
    }
} else {
    echo "Один или несколько введенных значении не являются цифрой";
} 

?>