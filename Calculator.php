<?php

$error = "";
$a = "";
$b = "";
$result = "";
if (isset($_GET['operation'])) {
    $a = $_GET['num1'];
    $b = $_GET['num2'];
    $op = $_GET['operation'];
    if (is_numeric($a) && is_numeric($b)) {
        switch ($op) {
            case '+' :
                $result = $a + $b;
                break;
            case '-' :
                $result = $a - $b;
                break;
            case '*' :
                $result = $a * $b;
                break;
            case '/' :
                if ($b == 0) {
                    $error = "Error: division by zero";
                } else {
                    $result = $a / $b;
                }
                break;
            case '^' :
                $result = power($a, $b);
                break;
            case '%' :
                $result = percent($a, $b);
                break;
        }
    } else {
        $error = "Enter number first";
    }
}

function power($number, $power)
{
    $res = 1.0;
    for ($i = 0; $i < $power; $i++) {
        $res *= $number;
    }
    if ($power >= 0)
        return $res;
    else
        return $number / $res;
}

function percent($number, $percent)
{
    return ($number / 100.0) * $percent;
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Calculator(Nugman Bogenbayev)</title>
</head>
<body>
<h1><?= $error ?></h1>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
    <div>
        <label for="num1">Number 1</label>
        <input type="number" name="num1" id="num1" value="<?= $a ?>">
    </div>
    <div>
        <label for="num2">Number 2</label>
        <input type="number" name="num2" id="num2" value="<?= $b ?>">
    </div>
    <div>
        <label for="result">Result</label>
        <input type="text" id="num3" value="<?= $result ?>" disabled>
    </div>
    <div>
        <input type="submit" value="+" name="operation">
        <input type="submit" value="-" name="operation">
        <input type="submit" value="*" name="operation">
        <input type="submit" value="/" name="operation">
        <input type="submit" value="^" name="operation">
        <input type="submit" value="%" name="operation">
    </div>
</form>
</body>
</html>
