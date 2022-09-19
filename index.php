<?php   
require 'my_functions.php';

$a          = $_GET['a'];
$b          = $_GET['b'];
$operator   = $_GET['op'];

if (isset($_GET['array'])) {
    $arr    = explode(',', $_GET['array']);
}


if (!is_numeric($a) or !is_numeric($b)) {
    echo 'Invalid type of arguments';
    exit();
}


$operations = [
    ' ' => 'add',
    '+' => 'add',
    '-' => 'substract',
    '*' => 'multiply',
    '/' => 'divide',
    '>' => 'is_bigger',
    '<' => 'is_smaller',
    '>=' => 'is_boe',
    '<=' => 'is_soe',
    '==' => 'is_equal',
    '!=' => 'is_not_equal',
    '%' => 'percentage',
];


try {
    // тут обрабатывается встроенные мат. функции в PHP. 
    // то есть в аргумент "op" можно писать sqrt(), pow() и тд)     
    // *скобки обязательны* чтобы понять что мы вызываем функцию PHP (легче всего так)
    if (substr($operator, -2) == '()') {
        // если передается аргумент "array" (внутри числа через запятую в url)
        if (!empty($arr)) {
            echo call_user_func(substr($operator, 0,-2), $arr);
        }          
        // встроенные функции с одним аргументами
        elseif ($b == '') {
            echo call_user_func(substr($operator, 0,-2), $a);
        }
        // встроенные функции с двумя аргументами
        else {
            echo call_user_func_array(substr($operator, 0,-2), array($a, $b));
        }
    }
    
    // тут обрабатываются функции написанные мною
    else {
        // валидация оператора и вызов
        my_operationer($a, $b, $operator, $operations);
    }

} catch (Exception $e) {
    echo 'Fatal error: ',  $e->getMessage(), "\n";
}

?>




