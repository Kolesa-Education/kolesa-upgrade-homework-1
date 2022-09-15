<?php

if (empty($_GET)) {
    echo "Ничего не передано";
    exit(0);
}


if (empty($_GET['operation'])) {
    echo "Операция не передана";
    exit(0);
}


if (empty($_GET['x1']) || empty($_GET['x2'])) {
    echo "Аргументы не переданы";
    exit(0);
}

$x1 = $_GET["x1"];
$x2 = $_GET["x2"];
$operation = $_GET["operation"];
$allowedOperation = [" ", "-", "/", "*", "mod", "x^y", "log"];

if (in_array($operation, $allowedOperation) != true) {
    echo "Такого оператора нету";
    exit(0);
}

if ((is_numeric($x1) && is_numeric($x2)) != true) {
    echo "Введите число";
    exit(0);
}

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
        echo log($x1, $x2);
        break;
}

