<?php
// %2B    => +
// %2A    => *
// %2F    => /
// -      => -
// %25    => % (module)
// ^      => ^ (pow)
// %25%25 => %% (Calculate the percentage of a number)

if (empty($_GET['a']) || empty($_GET['b']) || empty($_GET['c'])) {
    echo "pass all parameters";
    return;
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (gettype($a * 1) != "integer" || gettype($b * 1) != "integer") {
    echo "enter only integers in parameters a and b" . PHP_EOL;
    return;
}

switch ($c) {
    case "+":
        echo $a + $b . PHP_EOL;
        break;
    case "-":
        echo $a - $b . PHP_EOL;
        break;
    case "/":
        if ($b == 0) {
            echo "divide by zero" . PHP_EOL;
            return;
        }
        echo $a / $b . PHP_EOL;
        break;
    case "*":
        echo $a * $b . PHP_EOL;
        break;
    case "%":
        if ($b == 0) {
            echo "module by zero" . PHP_EOL;
            return;
        }
        echo $a % $b . PHP_EOL;
        break;
    case "^":
        echo pow($a, $b) . PHP_EOL;
        break;
    case "%%":
        percent($a, $b);
        break;
    default:
        echo "incorrect operation", PHP_EOL;
}

function percent($myNumber, $percent)
{
    echo ($myNumber / 100) * $percent . PHP_EOL;
}

?>