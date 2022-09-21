<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

function isChar($c) {
    if($c == '+' || $c == '-' || $c == '*' || $c == '\'')
        return true;
}

function isEqual($a, $b) {
    if($a == $b) return "they're equal";
    else return "they're not equal";
}

if(!(isset($_GET['a'],$_GET['b'], $_GET['c']))) {
    exit("STOP");
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if(is_numeric($a) && is_numeric($b) && isChar($c)) {
    switch ($c) {
        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "/":
            echo $a / $b;
            break;
        case "*":
            echo $a * $b;
            break;
        case "1":
            echo isEqual($a, $b);
            break;
        case "2":
            echo pow($a,$b);
            break;
        case "3":
            echo (($a * $b) /100);
            break;
        default:
            echo "не правильная операция";
    }
}