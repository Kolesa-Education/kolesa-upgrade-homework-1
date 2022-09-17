<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="wrapper">
        <div class="wrapper__form">
            <form action="./index.php" method="get">
                <label for="firstNumber">First Number: </label><br>
                <input type="text" name="firstNum"><br>
                <label for="secondNumber">Second Number: </label><br> 
                <input type="text" name="secondNum"><br>
                <label for="operation">Choose the operation: </label><br>
                <select name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                    <option value="^">^</option>
                    <option value=">">></option>  
                    <option value="<"><</option> 
                    <option value="=">=</option>  
                </select><br><br>
                <input type="submit" value="Submit" class="submit_form">
                <br><br>
                <?php 
                    $firstNumber = $_GET["firstNum"];
                    $secondNumber = $_GET["secondNum"];
                    $operator = $_GET["operator"];
                    $result; 

                    function isValid($firstNum, $secondNum) {
                        return is_numeric($firstNum) && is_numeric($secondNum);
                    }

                    function isOperator($operator) {
                        $comp = '+-*/%^><=';
                        for ($i = 0; $i < strlen($comp); $i++) {
                            if ($operator == $comp[$i]) return true;
                        }
                        return false; 
                    }
                    
                    if (!isValid($firstNumber, $secondNumber) || !isOperator($operator) || $secondNumber == 0) {
                        echo "Invalid operation";
                        return;
                    }
                    
                    if ($operator == "+") {
                        $result = $firstNumber + $secondNumber;
                    } else if ($operator == '-') {
                        $result = $firstNumber - $secondNumber;
                    } else if ($operator == "*") {
                        $result = $firstNumber * $secondNumber;
                    } else if ($operator == "/") {
                        $result = $firstNumber / $secondNumber;
                    } else if ($operator == "%") {
                        $result = $firstNumber % $secondNumber;
                    } else if ($operator == "^") {
                        $result = $firstNumber ** $secondNumber;
                    } else if ($operator == ">") {
                        $result = $firstNumber > $secondNumber;
                    } else if ($operator == "<") {
                        $result = $firstNumber < $secondNumber;
                    } else if ($operator == "=") {
                        $result = $firstNumber == $secondNumber;
                    }

                    echo "Result is: " . $result; 
                ?>
            </form>
        </div>
    </div>
</body>
</html>
