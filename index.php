<?php
// $a=$_GET['a'];
// $b=$_GET['b'];
// $c=$_GET['c'];

$a=15;
$b=16;
$c="<";


if (validateSet($a,$b,$c)){
    if (is_numeric($a) && is_numeric($b)){
        print_r(calculate($a,$b,$c));
    }else{
        echo 'Invalid data';
    }
    
}else{
    echo 'Data is empty';
}


function calculate($a,$b,$c){
    switch ($c){
    case "+":
        return $a+$b;
    case "-":
        return $a-$b;
    case "*":
        return $a*$b;
    case "/":
        if ($b==0){
            echo 'No division by 0';
            return;
        }else{
            return $a/$b;
        }
    case "**":
        return $a**$b;
    case "%":
        if ($b==0){
            echo 'No modulo by 0';
            return;
        }else{
            return $a%$b;
        }
    case ">":
        if ($a>$b){
            echo 'True';
            return;
        }else{
            echo 'False';
            return;
        }
    case "<":
        if ($a<$b){
            echo 'True';
            return;
        }else{
            echo 'False';
            return;
        }
    case "=":
        if ($a==$b){
            echo 'True';
            return;
        }else{
            echo 'False';
            return;
        }
    default:
        return'Is not an operator';
    }
}


function validateSet($a,$b,$c){
    if (isset($a) && isset($b) && isset($c)){
        return true;
    }else{
        return false;
    }
}
?>
