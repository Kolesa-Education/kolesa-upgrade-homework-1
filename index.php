<?php

#Мой веб сервер(APACHE) смотрит на путь  /Users/andrey_shabalin/localhost/kolesa-upgrade-homework-1
#Подозреваю, что ментору надо будет изменять путь или запускать в веб среде как мы делали на лекции
#Как лучше сделать в след. раз?:)

$a = is_numeric($_GET['a'])?$_GET['a']:FALSE;   # аргумент а
$b = is_numeric($_GET['b'])?$_GET['b']:FALSE;    # аргумент b
$c = $_GET['c'];                                        # знак выполнения операции
if (!$a or !$b){
    echo "а или b имеют неверный тип";
}
else{
#В зависимости от знака, выбираем действие
switch ($c) {
    case "+":                                           # Сложение
        echo $a + $b;
        break;
    case "-":                                           # Вычитание
        echo $a - $b;
        break;
    case "/":                                           # Деление
        if($b == 0)         # Если делим на 0
        {
            echo "Деление на ноль";
        }
        else                # Если не на 0
        {
        echo $a / $b;
        }
        break;
    case "*":                                           # Умножение
        echo $a * $b;
        break;
    case "%":                                           # Остаток от деления
        echo $a % $b;
        break;
    case "**":                                          # Возведение в степень
        echo $a ** $b;
        break;
    case "square":                                      # Корень
        echo $a ** (1/$b);
        break;
    case ">":                                           # Сравнение A>B?
        echo ($a>$b ? "Число a больше числа b" : "Число b больше или равно числу a");
        break;
    case ">":                                           # Сравнение A<B?
        echo ($b>$a ? "Число b больше числа a" : "Число a больше или равно числу b");
        break;
    case "=":                                           # Проверка на равенство
        echo ($a==$b ? "Число a равно числу b" : "Числa не равны ");
        break;
    default:        
        echo "не правильная операция";
}}
?>