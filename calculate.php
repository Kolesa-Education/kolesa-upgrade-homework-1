<?php

if ((!isset($_GET['val1'])) || (!isset($_GET['val2'])) || (!isset($_GET['oper']))) {
    echo "Не заданы некоторые обязаельные параметры: 
    <br> 'val1' - 1е число
    <br> 'val2' - 2е число
    <br> 'oper' - операция";
    exit;
}

$val1 = $_GET['val1'];
$val2 = $_GET['val2'];
$oper = $_GET['oper'];

echo "Привет, я калькулятор.<br>";
echo "─▐▐▐─▄████▄▄████▄─▌▌▌─ <br>";
echo "──█▌▐█▀▄▄▀██▀▄▄▀█▌▐█──<br>";
echo "──▐▌▐█▄▀▄████▄▀▄█▌▐▌── <br>";
echo "───█▄▀██████████▀▄█───<br>";
echo "────▀█▄▀██▀▀██▀▄█▀────<br>";
echo "──────▀█▄▀██▀▄█▀──────<br>";
echo "

<br> Я умею складывать (+), отнимать (-), умножать (*), делить (/),
<br> находить остаток от деления (%), возводить в степень (**)
<br>===<br>>>> ";

if (is_numeric($val1) && is_numeric($val2)) {
    switch ($oper) {
        case "+":
            $res = $val1 + $val2;
            break;
        case "-":
            $res = $val1 - $val2;
            break;
        case "*":
            $res = $val1 * $val2;
            break;
        case "%":
            if ($val2 != 0) {
                $res = $val1 % $val2;
            } else {
                $res = NULL;
                $problem = "На 0 делить нельзя";
            }
            break;
        case "**":
            if ($val1 == 0 && $val2 == 0) {
                $res = NULL;
                $problem = "Значение не определено";
            } else {
                $res = $val1 ** $val2;
            }
            break;
        case "/":
            if ($val2 != 0) {
                $res = $val1 / $val2;
            } else {
                $res = NULL;
                $problem = "На 0 делить нельзя";
            }
            break;
        default:
            $res = NULL;
            $problem = "Неизвестная операция";
            break;
    }
} else {
    $res = NULL;
    $problem = "Значения переменных не числа";
}

if (is_null($res)) {
    echo $problem;
} else {
    echo "$val1 $oper $val2 = $res";
}

// %2B -> +
// %2A -> *
// %2F -> /
// %3E -> >