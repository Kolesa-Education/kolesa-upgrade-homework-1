<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

function checkValidate($a, $b, $c){
    if (!isset($a) || !isset($b) || !isset($c)){
        echo 'Empty request';
        return false;
    }
    if (!is_numeric($a) || !is_numeric($b)) {
        echo 'Its not num';
        return false;
    }
    return true;
}

if (checkValidate($a, $b, $c)){
    calc($a, $b, $c);
}

function calc($a, $b, $c){
   switch ($c) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "/":
        if ($b == 0){
            echo 'No division by 0';
            break;
        }
        echo $a / $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "%":
        if ($b == 0){
            echo 'No modulo by 0';
            break;
        }
        echo $a % $b;
        break;
    case "**":
        echo $a ** $b;
        break;
    case ">":
        if ($a > $b){
            echo "true";
            break;
        }else{
            echo "false";
            break;
        }
    case "<":
        if ($a < $b){
            echo "true";
            break;
        }else{
            echo "false";
            break;
        }
    case "<":
        if ($a < $b){
            echo "true";
            break;
        }else{
            echo "false";
            break;
        }
    case "=":
        if ($a==$b){
            echo "true";
            break;
        }else{
            echo "false";
            break;
        }
    default:
        echo "bad operation";
} 
}

?>

