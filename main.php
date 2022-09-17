<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

extract($_GET);

if (!(isset($a, $b, $c))){
    echo "Set all vars a, b and c!";
    exit();
}
if (!(is_numeric($a)) || !(is_numeric($b))){
    echo " a and b vars's values must be numeric";
    exit();
}

switch ($c) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "/":
        if ($b == 0){
            echo "Division by zero!";
        } else {
            echo $a / $b;
        }
        break;
    case "*":
        echo $a * $b;
        break;
    case "mod":
        echo $a % $b;
        break;
    case "^":
        echo $a ** $b;
        break;
    case '%':
        echo $a * ($b / 100);
        break;
    default:
        echo "Unknown operation!";
}
