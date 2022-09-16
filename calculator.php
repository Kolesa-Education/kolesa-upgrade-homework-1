<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

if (empty($_GET)) {
    echo "Ничего не передано";
    exit(0);
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$operators = [ '+', '-', '/', '*', '**'];

if ((!is_numeric($a))  or (!is_numeric($b))) {
    echo "Ошибка. Нужно ввести числа";
    exit();
}
    else if ( in_array(!$c, $operators)){
        echo "Неправильная операция {$c}, введите знаки математических операций";
        exit();
    } else {
    switch ($c) {
        case urldecode('+'):
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
            exit;
    }
    }
?>