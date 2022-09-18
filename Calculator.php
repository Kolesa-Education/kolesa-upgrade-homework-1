<?php
    $error = "";
    $a = "";
    $b = "";
    $result = "";
    if (isset($_GET['operation']) && isset($_GET['num1']) && isset($_GET['num2'])) {
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
                    $result = pow($a, $b);
                    break;
                case '%' :
                    $result = percent($a, $b);
                    break;
                default :
                    $error = "Invalid operation";
                    break;
            }
        } else {
            $error = "Invalid input";
        }
    }

    function percent($number, $percent)
    {
        return $percent / 100.0 * $number;
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
        <input type="text" name="operation" placeholder="operations">
        <input type="submit">
    </div>
</form>
</body>
</html>
