<?php 
    $firstNumber = $_GET["firstNum"];
    $secondNumber = $_GET["secondNum"];
    $operator = $_GET["operator"];
    $result; 

    function isValid($firstNum, $secondNum) {
        return is_numeric($firstNum) && is_numeric($secondNum);
    }

    function isOperator($operator) {
        $comp = "+-*/%^><=";
        for ($i = 0; $i < strlen($comp); $i++) {
            if ($operator == $comp[i]) return true;
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
    } else if ($operator == '*') {
        $result = $firstNumber * $secondNumber;
    } else if ($operator == '/') {
        $result = $firstNumber / $secondNumber;
    } else if ($operator == '%') {
        $result = $firstNumber % $secondNumber;
    } else if ($operator == '^') {
        $result = $firstNumber ** $secondNumber;
    } else if ($operator == '>') {
        $result = $firstNumber > $secondNumber;
    } else if ($operator == '<') {
        $result = $firstNumber < $secondNumber;
    } else if ($operator == '=') {
        $result = $firstNumber < $secondNumber;
    }

    echo "Result is: " . $result; 
?>