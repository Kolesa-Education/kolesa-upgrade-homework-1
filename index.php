<?php

// %2B => +

if (is_numeric($_GET["numOne"]) && is_numeric($_GET["numTwo"]) && !empty($_GET["op"])) {
    $firstOperand = $_GET['numOne'];
    $secondOperand = $_GET['numTwo'];
    $operator = $_GET['op'];

    echo match ($operator) {
        "+" => $firstOperand + $secondOperand,
        "-" => $firstOperand - $secondOperand,
        "/" => $secondOperand === 0 ? $firstOperand / $secondOperand : 'Деление на ноль невозможно!',
        "*" => $firstOperand * $secondOperand,
        "**" => $firstOperand ** $secondOperand,
        "%" => $secondOperand === 0 ? $firstOperand % $secondOperand : 'Деление на ноль невозможно!',
        "<?>" => compareNumbers($firstOperand, $secondOperand),
        default => "Не правильный оператор!",
    };
} else {
    echo 'Переданы неверные значения!';
}

// Функция сравнения чисел
function compareNumbers($a, $b) {
    return match (true) {
        $a > $b => 'Первый операнд ' . $a . ' больше чем второй ' . $b,
        $a < $b => 'Второй операнд ' . $b . ' больше чем первый ' . $a,
        default => 'Оба значения равны',
    };
}
