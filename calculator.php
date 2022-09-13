<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if(empty($_GET)) {
    echo "Ничего не передано";
} else {
    if (is_null($a) || $a == '') {
        echo "Переменнная \"a\" не передана!";
    } else if (is_null($b) || $b == '') {
        echo "Переменнная \"b\" не передана!";
    } else if (is_null($c) || $c == '') {
        echo "Оператор \"c\" не передан!";
    } else if (!is_numeric($a) || !is_numeric($b)) {
        echo "Переменные \"а\" и \"b\" должны быть числом!";
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
            echo $a**$b;
            break;
        case "%":
            echo $a * ($b / 100);
            break;
        case ">":
            if ($a > $b) {
                echo "Верно";
            } else {
                echo "Не Верно";
            }
            break;
        case "<":
            if ($a < $b) {
                echo "Верно";
            } else {
                echo "Не Верно";
            }
            break;
        case "=":
            if ($a == $b) {
                echo "Верно";
            } else {
                echo "Не Верно";
            }
            break;
        default:
            echo "Не правильный оператор {$c}";
    }
    }
}
?>