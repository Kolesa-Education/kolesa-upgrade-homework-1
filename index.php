<?php 
    if(!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['c'])){
        echo "Переданы не все аргументы";
        die();
    }

    $num1 = $_GET['a'];
    $num2 = $_GET['b'];
    $action = $_GET['c'];

    if(!is_numeric($num1) || !is_numeric($num2)){
        echo "Переданы значения не типа integer или float";
        die();
    }

    switch($action){
        case "+":
            echo "$num1 + $num2 = " . ($num1 + $num2);
            break;
        case "-":
            echo "$num1 - $num2 = " . ($num1 - $num2);
            break;
        case "*":
            echo "$num1 * $num2 = " . ($num1 * $num2);
            break;
        case "/":
            echo "$num1 / $num2 = " . ($num1 / $num2);
            break;
        case "^":
            echo "$num1 ^ $num2 = " . pow($num1, $num2);
            break;
        case "=":
            if($num1 == $num2){
                echo "$num1 и $num2 равны";
            } else {
                echo "$num1 и $num2 не равны";
            }
            break;
        case "<":
            if($num1 < $num2){
                echo "$num2 больше $num1";
            } else {
                echo "$num2 не больше $num1";
            }
            break;
        case ">":
            if($num1 > $num2){
                echo "$num1 больше $num2";
            } else {
                echo "$num1 не больше $num2";
            }
            break;
        case "%":
            echo "$num1 процент числа $num2 равен " . ($num1/100) * $num2;
            break;     
        default:
            echo "Не правильная операция";
    }
?>