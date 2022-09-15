<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];


function calculate($a, $b, $c)
{
    $operators = array("+", "-", "*", "/", "**", "%");

    try {
        switch ($c) {
            case "+":
                echo $a + $b;
                break;
            case "-":
                echo $a - $b;
                break;
            case "*":
                echo $a * $b;
                break;
            case "/":
                echo $a / $b;
                break;
            case "**":
                echo $a ** $b;
                break;
            case "%":
                echo "число " . $b . " это " . $b * 100 / $a . "%" . " от числа " . $a;
                break;
            default:
                echo "неправильная операция: \n";
        }
    } catch (DivisionByZeroError $th) {
        echo "на ноль делить нельзя \n";
    } catch (TypeError $e) {
        echo "выражение не является числом \n";
    }


    if (!in_array($c, $operators)) {
        echo "введен неправильный символ," . " " . $c . " " . "-" . " " . "не является оператором \n";
    }
}

calculate($a, $b, $c);
