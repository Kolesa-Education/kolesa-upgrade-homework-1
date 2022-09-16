<?php

/**
 *  Author: Bitebayev Omargaly
 *  Telegram: @hAckeeVo
 *  About: Simple script for mathematical operations
 */

// Use these tips for test
// %2B => +
// %2A => *
// %2F => /
// -   => -
// equal => < > ==
// percent => %

if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if (is_numeric($a) and is_numeric($b)) {

        switch ($c) {
            case "+":
                echo "Результат операции сложения: " . ($a + $b);
                break;
            case "-":
                echo "Результат операции вычитания: " . ($a - $b);
                break;
            case "/":
                try {
                    echo "Результат операции деления: " . ($a / $b);
                } catch (DivisionByZeroError) {
                    echo "Ошибка! На ноль делить нельзя.";
                }
                break;
            case "*":
                echo "Результат операции умножения: " . ($a * $b);
                break;
            case "percent":
                echo "Результат операции получения процента: " . ($a * ($b / 100));
                break;
            case "%":
                try {
                    echo "Результат операции вычисления остатка от деления: " . ($a % $b);
                } catch (DivisionByZeroError) {
                    echo "Ошибка! На ноль делить нельзя.";
                }
                break;
            case "**":
                echo "Результат операции возведения в степень: " . ($a ** $b);
                break;
            case "equal":
                if ($a < $b) {
                    echo $a . " меньше, чем " . $b;
                } else if ($a > $b) {
                    echo $a . " больше, чем " . $b;
                } else echo $a . " равно " . $b;
                break;
            default:
                echo "Ошибка! Неверный оператор.";
        }
    } else echo "Ошибка! Заданые значения не являются числами";

} else echo "Ошибка! Проверьте заданы ли числа и оператор.";