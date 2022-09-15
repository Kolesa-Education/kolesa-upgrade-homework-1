<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
//pow => **,exponention
// mod% => %
//getRandomNum => return random number between a and b
//max => return max number from a and b
//min => return min number from a and b
//compare => сравнивает равны ли а и b

function superCalculator($a, $b, $c){
    switch ($c) {
        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "/":
            if($b = 0)
                echo "на ноль во вселенной этого калькулятора не делят";
            else
                echo $a / $b;
            break;
        case "*":
            echo $a * $b;
            break;
        case "pow":
            echo $a**$b;
            break;
        case "mod%":
            echo $a%$b ;
            break;
        case "percent":
            echo $a * ($b/100);
            break;
        case "getRandomNum":
            echo rand($a, $b);
            break;
        case "max":
            echo max($a, $b);
            break;
        case "min":
            echo min($a, $b);
            break;
        case "compare":
            if ($a == $b) {
                echo "а и b равны";
            } else {
                echo "а и b разные";
            }
        default:
            echo "Такую операцию не подвезли, свяжитесь с разработчиком для добавления";
    }
}

if (isset($_GET['a']) && isset($_GET['b'])  && isset($_GET['c'])) {

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if (is_numeric($a) && is_numeric($b)) {
        superCalculator($a, $b, $c);
    } else {
        echo "введите два числа,иначе я не буду работать";
    }
} else {
    echo "введи хоть что нибудь";
}

?>