<?php

function bool2str($x) {
    if ($x) {
        return 'true';
    }
    return 'false';
}

function add($a, $b) {
    return $a + $b;
}

function substract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        throw new Exception('Division by zero !');
    }
    return $a / $b;
}

function is_bigger($a, $b) {
    return bool2str($a > $b);
}

function is_smaller($a, $b) {
    return bool2str($a < $b);
}

function is_boe($a, $b) {
    return bool2str($a >= $b);
}

function is_soe($a, $b) {
    return bool2str($a <= $b);
}
 
function is_equal($a, $b) {
    return bool2str($a == $b);
}
    
function is_not_equal($a, $b) {
    return bool2str($a != $b);
}

// $n число, $p процент
function percentage($n, $p) { 
    $onep = $n / 100;
    return $p * $onep;
}

function my_operationer($a, $b, $operator, $operations) {
    if (!isset($operations[$operator])) {
        throw new Exception('Invalid operation !');
    }
    echo call_user_func_array($operations[$operator], array($a, $b));
}

?>