<?php
function calculate($a, $b ,$c) : string
{
switch ($c) {
    case "+":
        return $a + $b;
    case "-":
        return $a - $b;
    case "/":  
        if ($b == 0.0){
            return "Cannot be divided by 0";
        }
        return $a / $b;
    case "*":
        return $a * $b;
    case "^":
        return pow($a, $b);
    case "%":
        return $a*($b /100);
    case ">":
        return ($a>$b) ? 'TRUE' : 'FALSE';
    case "<":
        return ($a>$b) ? 'TRUE' :' FALSE';
    case "==":
        return ($a>$b) ? 'TRUE' : 'FALSE';
    default:
        return "Incorrect operation";
}
}

function transform($num){
    if (!is_numeric($num)){
        return;
    }
    return (double) $num;
}

$a = transform($_GET['a']);
$b = transform($_GET['b']);
$c = $_GET['c'];

if (is_null($a) || is_null($b) || is_null($c)){
    echo "Incorrect input";
    return;
}

echo calculate($a, $b, $c);