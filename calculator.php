<?php

declare(strict_types = 1);

$noNumbersError = "";
$num1 = "";
$num2 = "";
$result = "";

if (isset($_GET['operator'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    try {
        if (is_numeric($num1) && is_numeric($num2)) {

            switch ($operator) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    $result = $num1 / $num2;
                    break;
                case "module":
                    $result = $num1 % $num2;
                    break;
                case "exponent":
                    $result = $num1 ** $num2;
                    break;
                default:
                    echo "Error! Chose another operator";
                    break;
            }

        } else {
            $noNumbersError = "Enter numbers first";
        }
    } catch (DivisionByZeroError $e) {
        echo $e->getMessage() . "! Enter another Number 2";
    } catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>

<body>
    <p>
        <?=$noNumbersError?>
    </p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <!-- Number 1 -->
        <div>
            <label for="num1">Number 1</label>
            <input type="number" step=any name="num1" id="num1" value="<?=$num1?>">
        </div>
        <!-- Number 2 -->
        <div>
            <label for="num2">Number 2</label>
            <input type="number" name="num2" step=any id="num2" value="<?=$num2?>">
        </div>
        <!-- Result -->
        <div>
            <label for="result">Result</label>
            <input type="number" step=any id="result" value="<?=$result?>" disabled>
        </div>
        <!-- Operation -->
        <div>
            <input type="submit" value="add" name="operator">
            <input type="submit" value="subtract" name="operator">
            <input type="submit" value="multiply" name="operator">
            <input type="submit" value="divide" name="operator">
            <input type="submit" value="module" name="operator">
            <input type="submit" value="exponent" name="operator">
        </div>
    </form>

</body>

</html>