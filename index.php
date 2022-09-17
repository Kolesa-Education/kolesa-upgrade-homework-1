<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>
<?php
$a = checkGetRequest('a');
$b = checkGetRequest('b');
$c = checkGetRequest('c');

calculator($a, $b, $c);

function checkGetRequest($param)
{
    switch ($param) {
        case $param == 'a' or $param == 'b':
            if (checkNumber($param)) {
                return $_GET[$param];
            } else {
                printError($param);
            };
            break;
        case $param == "c":
            if (!empty($_GET[$param]) && checkOperator($_GET[$param])) {
                return $_GET[$param];
            } else {
                printError($param);
            }
            break;
    }
}

function calculator($a, $b, $c)

{
    if (is_numeric($a) && is_numeric($b) && $c) {
        switch ($c) {
            case "+":
                echo "{$a} + {$b} = " . $a + $b;
                break;
            case "-":
                echo "{$a} - {$b} = " . $a - $b;
                break;
            case "/":
                if ($b == 0) {
                    echo "Деление на ноль невозможно <br>";
                } else {
                    echo "{$a} / {$b} = " . $a / $b;
                }
                break;
            case "*":
                echo "{$a} * {$b} = " . $a * $b;
                break;
            case "sqrt":
                echo "sqrt{$a} = " . sqrt($a);
                break;
            case "**":
                echo "{$a} ** {$b} = " . $a ** $b;
                break;
            case "%":
                echo "{$a} % {$b} = " . $a % $b;
                break;
            case "=":
                echo $a == $b ? "{$a} равно {$b}" : "{$a} не равно {$b}";
                break;
            case "<":
                echo $a < $b ? "{$a} меньше {$b}" : "{$a} больше {$b}";
                break;
            case ">":
                echo $a > $b ? "{$a} больше {$b}" : "{$a} меньше {$b}";
                break;
            case "<=":
                echo $a <= $b ? "{$a} меньше или равно {$b}" : "{$a} больше или не равно {$b}";
                break;
            case ">=":
                echo $a >= $b ? "{$a} больше или равно {$b}" : "{$a} меньше или не равно {$b}";
                break;
            default:
                echo "не правильная операция <br>";
        }
    }
}

function checkNumber($param)
{
    return (!empty($_GET[$param]) && is_numeric($_GET[$param]));
}


function checkOperator($operator)
{
    $operators = ["+", "-", "/", "*", "sqrt", "**", "%", "=", "<", ">", "<=", ">="];
    return (in_array($operator, $operators));
}

function printError($param)
{
    echo "Параметр {$param} не передан или не соответствует типу <br>";
}

?>

</html>