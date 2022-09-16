<?php

$binary_operators = array(
    '**', // Exponentiation
    '+', // Addition
    '-', // Subtraction
    '*', // Multiplication
    '/', // Division
    '%', // Modulo
    '===', // identical
    '!==', // not identical
    '<=>', // spaceship operator
    '==', // equal
    '<=', // less than or equal
    '!=',  // not equal
    '<>',  // not equal
    '>=', // greater than or equal
    '>', // greater than
    '<', // less than
    '&&', // And
    '||', // Or
    'and', // And
    'xor', // Xor
    'or', // Or
);

$unary_operators = array(
    'sqrt', // Square root
    '!', // Not
    '--', // Decrement
    '++', // Increment
    'abs', // Absolute value
    'acos', // Arc cosine
    'acosh', // Inverse hyperbolic cosine
    'asin', // Arc sine
    'asinh', // Inverse hyperbolic sine
    'atan2', // Arc tangent of two variables
    'atan', // Arc tangent
    'atanh', // Inverse hyperbolic tangent
    'bindec', // Binary to decimal
    'ceil', // Round fractions up
    'cos', // Cosine
    'cosh', // Hyperbolic cosine
    'decbin', // Decimal to binary
    'dechex', // Decimal to hexadecimal
    'decoct', // Decimal to octal
    'deg2rad', // Converts the number in degrees to the radian equivalent
    'exp', // Calculates the exponent of e
    'expm1', // Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
    'floor', // Round fractions down
    'hexdec', // Hexadecimal to decimal
    'is_finite', // Finds whether a value is a legal finite number
    'is_infinite', // Finds whether a value is infinite
    'is_nan', // Finds whether a value is not a number
    'log10', // Base-10 logarithm
    'log1p', // Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
    'log', // Natural logarithm
    'octdec', // Octal to decimal
    'pi', // Get value of pi
    'rad2deg', // Converts the radian number to the equivalent number in degrees
    'rand', // Generate a random integer
    'round', // Rounds a float
    'sin', // Sine
    'sinh', // Hyperbolic sine
    'sqrt', // Square root
    'srand', // Seed the random number generator
    'tan', // Tangent
    'tanh' // Hyperbolic tangent`
);

//опеределение унарный или бинарный оператор
function get_operator_type(string $operator, array &$binary_operators, array &$unary_operators):string
{
    if (in_array($operator, $unary_operators))
        return 'unary';

    if (in_array($operator, $binary_operators))
        return 'binary';

    // если не нашли в коллекции, то завершаем с ошибкой
    throw new Exception('OPERATOR ERROR');
}


// проверка операндов
function check_operands(string $operand_1, string $operand_2, string $operator_type):bool
{
    if ($operator_type == 'unary'){
        if (!empty($operand_2)) // если унарный, то второй оператор должен быть пуст
            throw new Exception('OPERAND ERROR (EXCEPT ONLY ONE OPERAND)');
        elseif (is_numeric($operand_1)) // а первый должен быть численным
            return true;
        else
            throw new Exception('OPERAND ERROR (EXCEPT NUMERIC OPERAND)');
    } elseif ($operator_type == 'binary'){ // если оператор
        if (is_numeric($operand_1) and is_numeric($operand_2))
            return true;
        else
            throw new Exception('OPERAND ERROR (EXCEPT NUMERIC OPERANDS)');
    } else
        throw new Exception('OPERAND ERROR (COULD NOT PARSE)');
}

// запускаем "кусочек" пхп из пхп
function evaluate(string $operand_1, string $operand_2, string $operator, string $operator_type):string {
    $output = 'dummy'; // так как eval должен иметь дело с инициализированными переменными
    // строим строку для запуска в зависимости от оператора
    if ($operator_type == 'unary'){
        if(ctype_alnum($operator)) // если в операторе есть альфанумерик значения, то операнд оборачивается в скобки
            eval('$output = ' . $operator. '(' . $operand_1 . ')'. ';');
        else
            eval('$output = ' . $operator . $operand_1 . ';');
    } elseif ($operator_type == 'binary')
        eval( '$output = ' . $operand_1 . $operator . $operand_2 . ';');
    return $output;
}

function calculate(string $operand_1, string $operand_2, string $operator, array &$binary_operators, array &$unary_operators):string
{
    try { // проверяем есть ли у нас заправшиваемый оператор и определяем унарный он или бинарный
        $operator_type = get_operator_type($operator, $binary_operators, $unary_operators);
    } catch(Exception $e){
        echo '400 Bad Request: ' . $e->getMessage() . PHP_EOL ;;
        return $e;
    }

    try { // проверяем операнды
        check_operands($operand_1, $operand_2, $operator_type);
    } catch(Exception $e){
        echo '400 Bad Request: ' . $e->getMessage() . PHP_EOL ;;
        return $e;
    }

    // считаем результат
    return evaluate($operand_1, $operand_2, $operator, $operator_type);
}


// получаем данные
$operand_1 = urldecode($_GET['operand_1']);
$operand_2 = urldecode($_GET['operand_2']);
$operator = urldecode($_GET['operator']);

if ($operator == ' ')  // обход бага с символом '+'
    $operator = '+';
elseif ($operator == '  ')
    $operator = '++';


echo 'operand_1: ' . $operand_1 . PHP_EOL;
echo 'operand_2: ' . $operand_2 . PHP_EOL;
echo 'operator: ' . $operator . PHP_EOL;

echo 'Result: ' . calculate($operand_1, $operand_2, $operator, $binary_operators, $unary_operators);