<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (is_numeric($a) && is_numeric($b)) {
    switch ($c) {
        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "/":
            if ($b == 0) {
                echo ("На ноль не делят!");
            } else {
                echo $a / $b;
            }
            break;
        case "*":
            echo $a * $b;
            break;
        case "^": #возведение $a в степень $b
            echo $a ** $b;
            break;
        case "%": #Процент $b из числа $b 
            echo ($a * ($b / 100));
            break;
        case "%": #Процент $b из числа $b 
            echo ($a * ($b / 100));
            break;
        default:
            echo ("В переменной Ц говно: " . $c . PHP_EOL);
            echo ("если после двоеточия ничего не отображаеться, возможно в GET запрос ушел символ, который нельзя использвать в URL, например символ '+'" . PHP_EOL);
            echo ("не правильная операция" . PHP_EOL);
        }
            }
            else {
                echo ("В поле A или B задано не числовое значение");
            }

?>
