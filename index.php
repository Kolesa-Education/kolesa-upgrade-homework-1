<?php

// пишу "%2B" вместо "+" в Postman

$first_num = $_GET['num1'];
$second_num = $_GET['num2'];
$operator = $_GET['opr'];


$operators_list = array('+', '-', '*', '/', '%', '?', '^');


// сначала проверяю есть ли переданный оператор в списке предусмотренных операторов 
// после этого, проверяю являются ли переданные значения num1 и num2 числовыми

if (in_array($operator, $operators_list)) {
    if (is_numeric($first_num) && is_numeric($second_num)) {
        switch ($operator) {
            case '+':
                echo $first_num + $second_num;
                break;
            case '-':
                echo $first_num - $second_num;
                break;
            case '*':
                echo $first_num * $second_num;
                break;
            // деление на ноль
            case '/':
                if ($second_num != 0) {
                    echo $first_num / $second_num;
                } else {
                    echo 'На ноль делить нельзя!';
                }
                break;
            // остаток от деления + учитываю что на ноль нельзя делить
            case '%':
                if ($second_num != 0) {
                    echo $first_num % $second_num;
                } else {
                    echo 'На ноль делить нельзя!';
                }
                break;
            // сравнение двух чисел + вызов созданной функции
            case '?':
                echo CompareTwoNumbers($first_num, $second_num);
                break;
            // результат возведения в степень + использую встроенную функцию pow
            case '^':
                echo pow($first_num, $second_num);
                break;
        }
    } else {
        echo 'Введите числовые значения!';
    }
} else {
    echo "Неправильная операция! Вы можете выполнить только:\nсложение -> %2B,\n вычитание -> -,\n умножение -> *,\n деление -> /,\n вычисление остатка от деления -> %,\n сравнение двух чисел -> ?";
}


// пробую создать свою функцию
function CompareTwoNumbers($a, $b) {
    if ($a > $b) {
        return $a.' больше '.$b;
    } else if ($a < $b) {
        return $a.' меньше '.$b;
    } else {
        return $a.' равно '.$b;
    }
}


?>