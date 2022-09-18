<?php
$a = $_GET['a'] ?? false;
$b = $_GET['b'] ?? false;
$c = $_GET['c'] ?? false;
if (empty($a) || empty($b) || empty($c)){
    echo "one of the parameters is empty";
    return;
} elseif(!is_numeric($a) || !is_numeric($b)){
    echo "one of this is not a number";
    return;
}

switch ($c):
    case "+":
        echo '$a + $b = ' . ($a + $b);
        break;
    case "-":
        echo '$a - $b = ' . ($a - $b);
        break;
    case "/":
        echo '$a / $b = ' . ($a / $b);
        break;
    case "*":
        echo '$a * $b = ' . ($a * $b);
        break;
    case "%":
        echo '$a % $b = ' . ($a % $b);
        break;
    case "**":
        echo '$a ** $b = ' . ($a ** $b);
        break;
    case "max":
        echo 'max($a, $b) = ' . max($a, $b);
        break;
    case "min":
        echo 'min($a, $b) = ' . min($a, $b);
        break;
    case "fmod":
        echo 'fmod($a, $b) = ' . fmod($a, $b);
        break;
    default:
        echo "wrong operation";
endswitch;
?>