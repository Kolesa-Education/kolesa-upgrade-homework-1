<?php
$error = "";
$result1 = "";
$result2 = "";
$result = "";
if (isset($_GET['operation'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operation = $_GET['operation'];

    try {
        if (is_numeric($result1) && is_numeric($result2)) {

            switch ($operation) {
                case "add":
                    $result = $result1 + $result2;
                    break;
                case "subtract":
                    $result = $result1 - $result2;
                    break;
                case "multiply":
                    $result = $result1 * $result2;
                    break;
                case "divide":
                    $result = $result1 / $result2;
                    break;
                case "module":
                    $result = $result1 % $result2;
                    break;
                case "exponent":
                    $result = $result1 ** $result2;
                    break;
            }

        } else {
            $error = "Enter numbers first";
        }
    } catch (DivisionByZeroError $e) {
        echo $e->getMessage() . "! Enter another Number 2";
    } catch (DivisionByZeroError) {
        echo "Modulo by zero! Enter another Number 2";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>

<body>
    <p>
        <?=$error?>
    </p>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <!-- Number 1 -->
        <div>
            <label for="num1">Number 1</label>
            <input type="number" step="0.01" name="num1" id="num1" value="<?=$x?>">
        </div>
        <!-- Number 2 -->
        <div>
            <label for="num2">Number 2</label>
            <input type="number" name="num2" step="0.01" id="num2" value="<?=$y?>">
        </div>
        <!-- Result -->
        <div>
            <label for="result">Result</label>
            <input type="number" step="0.01" id="result" value="<?=$result?>" disabled>
        </div>
        <!-- Operation -->
        <div>
            <input type="submit" value="add" name="operation">
            <input type="submit" value="subtract" name="operation">
            <input type="submit" value="multiply" name="operation">
            <input type="submit" value="divide" name="operation">
            <input type="submit" value="module" name="operation">
            <input type="submit" value="exponent" name="operation">
        </div>
    </form>

</body>

</html>




