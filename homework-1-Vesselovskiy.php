<?php

$a = $_GET['a'] ?? 'empty';
$b = $_GET['b'] ?? 'empty';
$c = $_GET['c'] ?? 'empty';
$stop = false;

function qInfo()
{
    echo "Если что-то пошло не так, пример запроса на сложение числа 1 и 2 выглядит так: ?a=1&b=1&c=+ <br/>";
    echo "Какие операторы я понимаю? <br/>";
    echo "Для сложения используй в запросе + <br/>";
    echo "Для вычитания используй в запросе - <br/>";
    echo "Для умножения используй в запросе * <br/>";
    echo "Для деления используй в запросе / <br/>";
    echo "А если хочешь сравнить введенные числа, используй в запросе <=>";
}

if ($a != 0)
    switch ($a) {
        case $a == "empty":
            echo "Неверный запрос, введите в запросе первую переменную </br></br>";
            $stop = true;
            qInfo();
            break;
        case !is_numeric($a):
            echo "Неверный запрос, первая переменная должна быть числом </br></br>";
            $stop = true;
            qInfo();
            break;
    }

if ($b != 0)
    if ($stop == false) {
        switch ($b) {
            case $b == "empty":
                echo "Неверный запрос, введите в запросе вторую переменную </br></br>";
                $stop = true;
                qInfo();
                break;
            case !is_numeric($b):
                echo "Неверный запрос, вторая переменная должна быть числом </br></br>";
                $stop = true;
                qInfo();
                break;
        }

        switch ($c) {
            case "0":
                echo "Неверный запрос, введите в запросе оператор который я понимаю </br></br>";
                $stop = true;
                qInfo();
                break;
            case $c == "empty" and $c != "0":
                echo "Неверный запрос, ты не ввел оператор </br></br>";
                $stop = true;
                qInfo();
                break;
        }
        if ($stop == false)
            switch ($c) {
                case " ":
                    echo "Результат сложения: $a + $b =  ", $a + $b;
                    break;
                case "-":
                    echo "Результат вычитания: $a - $b =  ", $a - $b;
                    break;
                case "/":
                    if ($b == 0)
                        echo "На ноль делить нельзя!";
                    else
                        echo "Результат деления: $a / $b =  ", $a / $b;
                    break;
                case "*":
                    echo "Результат умножения: $a * $b =  ", $a * $b;
                    break;
                case "<=>":
                    if ($a > $b)
                        echo "Результат сравнения :  ", "$a больше, чем $b";
                    elseif ($a < $b)
                        echo "Результат сравнения :  ", "$a меньше, чем $b";
                    else
                        echo "Результат сравнения :  ", "$a равно $b";
                    break;
                default:
                    echo "Неверный запрос, введите в запросе оператор который я понимаю </br></br>";
                    qInfo();
                    break;
            }
    }
