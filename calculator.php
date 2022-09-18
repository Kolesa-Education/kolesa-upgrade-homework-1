<?php
$a = $_GET['a'] ?? null;
$b = $_GET['b'] ?? null;
$c = $_GET['c'] ?? null;
if ($a != null || $b != null || $c != null){
    echo "one of the parameters is empty";
    return;
} 
if(!is_numeric($a) || !is_numeric($b)){
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
