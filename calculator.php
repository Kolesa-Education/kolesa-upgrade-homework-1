<?php

// %2B => +

if (isset($_GET['a']) and isset($_GET['b']) and isset($_GET['c'])){
    $a = $_GET['a'];   
    $b = $_GET['b'];
    $c = $_GET['c'];
} else{
    $a = "";
    $b = "";
    $c = "";
}

function calculate($a, $b, $c) {
    if (is_numeric($a) and is_numeric($b)) {
        switch ($c) {
            case "+":
                echo $a + $b;
                break;
            case "-":
                echo $a - $b;
                break;
            case "/":
                try {
                    echo ($a/$b);
                } catch (DivisionByZeroError){
                    echo "Ошибка (На ноль делить нельзя)";
                }
                break;
            case "*":
                echo $a * $b;
                break;
            case "**":
                echo $a**$b;
                break;
            default:
                echo "Не правильная операция";
}} else{
        echo "Проверьте корректность введенных чисел и операции";
}}

calculate($a, $b, $c);