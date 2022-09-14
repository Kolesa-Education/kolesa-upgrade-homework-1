<?php

if (empty($_GET)) {
    echo "Ничего не передано";
}


if (empty($_GET['operation'])) {
    echo "Операция не передана";
}


if (empty($_GET['x1']) || empty($_GET['x2'])) {
    echo "Аргументы не переданы";
}

$x1 = $_GET["x1"];
$x2 = $_GET["x2"];
$operation = $_GET["operation"];

if ($operation==" " || $operation == "-" || $operation == "/" || $operation == "*" || $operation == "mod" || $operation == "x^y" || $operation == "log") {
    if (is_numeric($x1) && is_numeric($x2)) {
        switch ($operation) {
            case " ":
                echo $x1 + $x2;
                break;
            case "-":
                echo $x1 - $x2;
                break;
            case "/":
                echo $x1 / $x2;
                break;
            case "*":
                echo $x1 * $x2;
                break;
            case "mod":
                echo $x1 % $x2;
                break;
            case "x^y":
                echo $x1 ** $x2;
                break;
            case "log":
                echo log($x1,$x2);
                break;
        }
    }
        else {
            echo "Введите число";
        }
} else {
    echo "Такого оператора нету";
}


