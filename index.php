<?php

/**
 * Getting parameters
 */

$first_num = $_GET['num1'];
$second_num = $_GET['num2'];
$operator = $_GET['opr'];

// Список доступных операторов. Пишу "%2B" вместо "+" в Postman
$operators_list = array('+', '-', '*', '/', '%', '?', '^');

/**
 * Проверка на наличие аргументов
 */
if ($_GET['num1'] == null || $_GET['num2'] == null) {
    exit ('Для произведения вычислений введите два числа!');
}

/**
 * Проверка на наличие оператора и его валидность 
 */
if (empty($_GET['opr'])) {
    exit ('Не введен оператор!');
} elseif (in_array($operator, $operators_list) === false) {
    echo 'Неправильная операция! Вы можете выполнить только:
    сложение -> %2B,
    вычитание -> -,
    умножение -> *,
    деление -> /,
    вычисление остатка от деления -> %,
    сравнение двух чисел -> ?';
}

/**
 * Проверяю являются ли переданные значения num1 и num2 числовыми.
 * Затем, выполняется основная логика калькулятора.
 */
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

        case '/':
            // Учитываю деление на ноль
            if ($second_num != 0) {
                echo $first_num / $second_num;
            } else {
                echo 'На ноль делить нельзя!';
            }
            break;

        /**
         * Вычисление остатка от деления.
         */
        case '%':
            // Учитываю деление на ноль
            if ($second_num != 0) {
                echo $first_num % $second_num;
            } else {
                echo 'На ноль делить нельзя!';
            }
            break;

        /**
         * Сравнение двух с помощью вызова созданной функции
         */
        case '?':
            echo compare_two_numbers($first_num, $second_num);
            break;

        /**
        * Вычисление результата возведения в степень с помощью встроенной функции pow()
        */
        case '^':
            echo pow($first_num, $second_num);
            break;
    }
} else {
    echo 'Введите числовые значения!';
}

/**
 * Функция на входе принимает два параметра и сравнивает их 
 * с помощью операторов <, >, =, а на выходе возращает результат сравнения.
 */
function compare_two_numbers($a, $b) {
    if ($a > $b) {
        return $a . ' больше ' . $b;
    } elseif ($a < $b) {
        return $a . ' меньше ' . $b;
    } else {
        return $a . ' равно ' . $b;
    }
}

// EOF
