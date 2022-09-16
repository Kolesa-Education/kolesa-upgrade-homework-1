<?php
function transform($num){
    if (!is_numeric($num) ){
        return;
    }

    $num=(double)$num; 
    
    return $num;
}

$a=transform($_GET['a']);
$b=transform($_GET['b']);
$c = $_GET['c'];

if (is_null($a)||is_null($b)||is_null($c)){
    echo "Incorrect input";
    return;
}

switch ($c) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "/":  
        if ($b==0.0){
            echo "Cannot be divided by 0";
            break;
        }
        echo $a / $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "^":
        echo pow($a,$b);
        break;
    case "%":
        echo $a*($b/100);
        break;
    case "?":
        if ($a>$b){
            echo '>';
        }else if ($a<$b){
            echo '<';
        }else{
            echo '=';
        }
        break;
    default:
        echo "Incorrect operation";
}
?>