<?php
    
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (is_numeric($a) && is_numeric($b)) {
    switch ($c){
        case "+":
            echo $a+$b;
            break;
        case "-":
            echo $a-$b;
            break;
        case "*":
            echo $a*$b;
            break;
        case "/":
            if ($b==0) {
                echo "Ошибка! Деление на ноль!";
            } 
            else {
                echo $a/$b;
            }
            break;
        #вовзедение в степень
        case "^":
            echo pow($a,$b); 
            break;
        # сколько число $a составляет процентов от числа $b
        case "%": 
            echo ($a*($b/100))*100 . "%";
            break;
        # сравнение переменных
        case "=":
        case ">":
        case "<":
            if ($a>$b){
                echo $a . " больше " . $b
            }
            if ($a<$b){
                echo $a . " меньше " . $b
            }
            if ($a==$b){
                echo $a . " равно " . $b
            }
            break;
        default:
            echo "Ошибка! Неправильная операция!"
    }
}
else {
    echo "Ошибка! Неверно введены данные!"
}
