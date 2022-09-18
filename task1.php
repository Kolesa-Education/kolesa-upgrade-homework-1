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
        if ($a>$b){
            return 'TRUE';
        }else{
            return 'FALSE';
        }
    case "<":
        if ($a<$b){
            return 'TRUE';
        }else{
            return 'FALSE';
        }
    case "==":
        if ($a==$b){
            return 'TRUE';
        }else{
            return 'FALSE';
        }
    default:
        return "Incorrect operation";
}
}

$a = (!is_numeric($_GET['a'])) ? NULL : (double)$_GET['a'];
$b = (!is_numeric($_GET['b'])) ? NULL : (double)$_GET['b'];
$c = $_GET['c'];

if (is_null($a) || is_null($b) || is_null($c)){
    echo "Incorrect input";
    return;
}

echo calculate($a, $b, $c);