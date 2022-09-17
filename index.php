<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if(!is_numeric($a) || !is_numeric($b)){
    echo "Вы ввели неверные значения!";
}
else{
    if ($c == "+") {
        echo ($a + $b);
    } elseif ($c == "-") {
        echo $a - $b;
    } elseif ($c == "*") {
        echo $a * $b;
    } elseif ($c == "/") {
        if ($b == 0){
            echo("На ноль делить нельзя!");
        } else {
            echo ($a / $b);
        }
    } elseif ($c == "==") {
        if ($a > $b){
            echo "Первое число (а) больше второго числа (b)";
        } elseif ($a < $b){
            echo "Первое число (а) меньше второго числа (b)";
        } else {
            echo "Оба числа равны";
        }

    } elseif ($c == "^") {
        echo (pow($a, $b));
    } elseif ($c == "%") {
        echo ($a % $b);
    } else {
        echo "Не верная операция!";
    }
}

?>