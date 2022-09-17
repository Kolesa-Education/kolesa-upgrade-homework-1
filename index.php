<?php
function doUrlEncode($c) {
    $entities = array( '%2A',  '%3D', '%2B',  '%2F',  '%25','%2A%2A','%2F%2F' );
    $replacements = array( '*',  "=", "+",  "/",  "%","**","//");
    return str_replace($entities, $replacements, urlencode($c));
}
function doComp($a,$b){
    
    if ($a>$b){
        echo $a.' > '.$b;
   
    }
     else if ($b>$a){
         echo $a.' < '.$b;
     }
     else {
         echo $a.' = '.$b;
     }
    
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

switch (doUrlEncode($c) ){
    case is_numeric( $a)!= 1 or  is_numeric( $b)!=1:
        echo "введите числовое значение ";
         break;
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "/":
        echo $a / $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "**":
        echo bcpow($a,$b,2);
        break;
    case "//":
        echo bcsqrt($a,$b);
        break;    
    case "=":
        echo DoComp($a,$b);
        break;   
    case "%":
        echo $b/$a*100;
        break; 
    default:
        echo "не правильная операция";
}
?>