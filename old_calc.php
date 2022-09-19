<?php   

$a          = $_GET['a'];
$b          = $_GET['b'];
$operator   = $_GET['op'];

// echo $a . $b . $operator;

switch ($operator) {
    case " ":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "/":
        echo $a / $b;
        break;
    default:
        echo 'неправильная операция';    
}


?>
