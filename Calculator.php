<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
// %5e => ^
// %25 => %
// %E2%88%9A => √
// <=> => <=> // сравнение чисел


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
                echo "На ноль делить нельзя";
                break;
            } else {
                echo $a / $b;
                break;
            }
        case "*":
            echo $a * $b;
            break;
        case "^":
            echo $a ** $b;
            break;
        case "%":
            echo $b * ($a / 100);
            break;
        case "√":
            if ($b == 0) {
                echo "На ноль делить нельзя";
                break;
            } else {
                echo pow($a, 1 / $b);
                break;
            }
        case "<=>":
            if ($a === $b) {
                echo "{$a} = {$b}";
                break;
            } else if ($a > $b) {
                echo "{$a} > {$b}";
                break;
            } else {
                echo "{$a} < {$b}";
                break;
            }
        default:
            echo "Неправильная операция";
    }
} else {
    echo "Проверьте правильность введенных данных";
}

?>