<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if ((!is_numeric($a))  or (!is_numeric($b))) {
    echo "Ошибка. Нужно ввести числа";
    exit();
} else {
    switch ($c) {
        case urldecode("+"):
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
        case "**":
            echo $a ** $b;
            break;
        default:
            echo "Неправильная операция {$c}, введите знаки математических операций";
    }

}
?>