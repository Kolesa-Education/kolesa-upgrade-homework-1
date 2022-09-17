<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>

<body>
    <form action="index.php" style="margin:30px 30px 30px 30px;">
        <h2>Calculator</h2>
        <input type="text" name="a" value="<?php if (isset($_GET['a'])) {
                                                echo $_GET['a'];
                                            } ?>" style="width: 62px;font-size: 16px;" />
        <input type="text" name="c" value="<?php if (isset($_GET['c'])) {
                                                echo $_GET['c'];
                                            } ?>" style="width: 20px;font-size: 16px;" />
        <input type="text" name="b" value="<?php if (isset($_GET['b'])) {
                                                echo $_GET['b'];
                                            } ?>" style="width: 62px;font-size: 16px;">
        <input type="submit" value="=">
        <b style="margin-left:5px; font-size: 20px;">
            <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];

            if (is_numeric($a) && is_numeric($b)) {
                switch ($c) {
                    case "-":
                        echo $a - $b;
                        break;
                    case "+":
                        echo $a + $b;
                        break;
                    case "/":
                        if ($b == 0) {
                            echo "Cannot divide by Zero";
                        } else {
                            echo $a / $b;
                        }
                        break;
                    case "%":
                        if ($b == 0) {
                            echo "No modulo by Zero";
                        } else {
                            echo $a % $b;
                        }
                        break;
                    case "*":
                        echo $a * $b;
                        break;
                    case "^":
                        echo $a ** $b;
                        break;
                    case ">":
                        echo $a > $b ? "true" : "false";
                        break;
                    case "<":
                        echo $a < $b ? "true" : "false";
                        break;
                    case "==":
                        echo $a == $b ? "true" : "false";
                        break;
                    default:
                        echo "Invalid operator";
                        break;
                }
            } else {
                echo "Invalid input";
            }
            ?> </b>
    </form>
</body>

</html>