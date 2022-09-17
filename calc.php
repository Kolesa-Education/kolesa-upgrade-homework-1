<?php
// %2B    => +
// %2A    => *
// %2F    => /
// -      => -
// %25    => % (module)
// ^      => ^ (pow)
// %25%25 => %% (Calculate the percentage of a number)
if (empty($_GET['a'])||empty($_GET['b'])||empty($_GET['c'])) {
    echo "pass all parameters";
    return;
}
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if (!is_numeric($a)||!is_numeric($b)){
    echo "enter only integers in parameters a and b", PHP_EOL;
    return;
}

$invalid = isValid($a);
if ($invalid){
    echo "enter only integers", PHP_EOL;
    return;
}
$invalid = isValid($b);

switch ($c) {
    case "+":
        echo $a + $b, PHP_EOL;
        break;
    case "-":
        echo $a - $b, PHP_EOL;
        break;
    case "/":
        if ($a==0){
            echo "divide by zero", PHP_EOL;
            return;
        }
        echo $a / $b, PHP_EOL;
        break;
    case "*":
        echo $a * $b, PHP_EOL;
        break;
    case "%":
        if ($a==0){
            echo "module by zero", PHP_EOL;
            return;
        }
        echo $a % $b, PHP_EOL;
        break;
    case "^":
        echo pow($a,$b), PHP_EOL;
        break;
    case "%%":
        percent($a,$b);
        break;
    default:
        echo "incorrect operation", PHP_EOL;
}

function isValid($num){
    if (gettype($num * 1) !="integer"){
        return true;
    }
    return false;
}

function percent($myNumber,$percentToGet){
    $percentInDecimal = $percentToGet / 100;
    $percent = $percentInDecimal * $myNumber;
    echo $percent, PHP_EOL;
}

?>