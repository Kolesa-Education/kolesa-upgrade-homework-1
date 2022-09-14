<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

$res = "";
$a = "";
$b = "";
$c = "";

if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if (is_numeric($a) && is_numeric($b)) {
        $res = match ($c) {
            "+" => $a + $b,
            "-" => $a - $b,
            "/" => Divide($a, $b),
            "*" => $a * $b,
            "^" => $a ** $b,
            "%" => $a * $b / 100,
            ">" => IsBigger($a, $b),
            "<" => IsBigger($b, $a),
            "=" => IsEqual($b, $a),
            default => "Invalid operation"
        };
    } else {
        $res = "Invalid inputs";
    }
}


function Divide($num1, $num2)
{
    try {
        return $num1 / $num2;
    } catch (DivisionByZeroError $e) {
        return "You cannot divide by zero";
    }
}

function IsBigger($num1, $num2)
{
    ($num1 > $num2) ? $msg = "true" : $msg = "false";
    return $msg;
}

function IsEqual($num1, $num2)
{
    ($num1 == $num2) ? $msg = "true" : $msg = "false";
    return $msg;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="index.php" method="GET">
        <div>
            <label for="a">First Number</label>
            <input type="text" name="a" value="<?= $a ?>">
        </div>
        <div>
            <label for="b">Second Number</label>
            <input type="text" name="b" value="<?= $b ?>">
        </div>

        <div>
            <label for="c">Operation</label>
            <input type="text" name="c" value="<?= $c ?>">
            <button type="submit">Calculate</button>
        </div>



        <div>
            <label for="res">Result</label>
            <input type="text" name='res' value="<?= $res ?>" disabled>
        </div>
    </form>
</body>

</html>