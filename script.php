
<?php

function checkInput(): bool
{
    $numOne = $_GET['a'];
    $numTwo = $_GET['b'];
    $operation = $_GET['c'];
    if (!isset($numOne, $numTwo, $operation)) {
        return false;
    }
    if (!(is_numeric($numOne) && is_numeric($numTwo))) {
        return false;
    }
    return true;
}

$numOne = (float)$_GET['a'];
$numTwo = (float)$_GET['b'];
$operation = $_GET['c'];

if (!checkInput()) {
    echo "Invalid input, товарищ!";
    return;
}

$result = 0;

switch ($operation) {
    case "+":
        $result = $numOne + $numTwo;
        break;
    case "-":
        $result = $numOne - $numTwo;
        break;
    case "*":
        $result = $numOne * $numTwo;
        break;
    case "/":
        if ($numTwo == 0) {
            $result = "No division by 0, yopta!";
            break;
        }
        $result = $numOne / $numTwo;
        break;
    case "%":
        $result = (int)$numOne - (int)$numOne / (int)$numTwo;
        break;
    case "^":
        $result = pow($numOne, $numTwo);
        break;
    case ">":
        $result = $numOne > $numTwo;
        break;
    case "<":
        $result = $numOne > $numTwo;
        break;
    case "=":
        $result = $numOne == $numTwo;
        break;
    default:
        $result = "Invalid operation, druzhok!";
}

echo "Result of " . $numOne . " " . $operation . " " . $numTwo . " is: " . $result . PHP_EOL;
echo "Poka <3";
