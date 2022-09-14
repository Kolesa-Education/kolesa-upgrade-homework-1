<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
// %25 => %

function isValidInput($a, $b, $c): bool
{
    if (!is_numeric($a) || !is_numeric($b)) {
        return false;
    }

    return gettype($c) === "string";
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$expression = "{$a} {$c} {$b} = ";

if (!isValidInput($a, $b, $c)) {
    echo "Некорректный ввод";
} else {
    switch ($c) {
        case "+":
            echo $expression . $a + $b;
            break;
        case "-":
            echo $expression . $a - $b;
            break;
        case "/":
            echo $expression . $a / $b;
            break;
        case "*":
            echo $expression . $a * $b;
            break;
        case "mod":
            echo "{$a} mod {$b} = "  . $a % $b;
            break;
        case "^":
        case "**":
            echo $expression . $a ** $b;
            break;
        case "%":
            echo "{$b}% of {$a} = " . $a * ($b / 100);
            break;
        case ">":
            if ($a > $b) {
                echo "Истина";
            } else {
                echo "Ложь";
            }
            break;
        case "=":
            if ($a === $b) {
                echo "Истина";
            } else {
                echo "Ложь";
            }
            break;
        case "<":
            if ($a < $b) {
                echo "Истина";
            } else {
                echo "Ложь";
            }
            break;
        default:
            echo "{$c} не является оператором";
    }
}
