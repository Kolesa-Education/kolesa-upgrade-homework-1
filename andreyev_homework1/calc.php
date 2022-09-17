<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$res = 0;

if(is_numeric($_GET["a"]) && is_numeric($_GET["b"])){
    switch ($c){
        case "+":
            echo $res = $a + $b;
            break;
        case "-":
            echo $res = $a - $b;
            break;   
        case "*":
            echo $res = $a * $b;
            break;
        case "/":
            if($b == 0){
                echo "Нельзя делить на 0";
                break;
            }else{
                echo $res = $a / $b;
                break;
            }
        case "^":
            echo $res = $a ** $b;
            break;
        case "√":
            if($b == 0){
                echo "Нельзя вычислить корень ";
                break;
            }else{
                echo $res = pow($a, 1/$b);
                break;
            }
        case "%":
            if($b == 0){
                echo "Нельзя делить на 0";
                break;    
            }else{
                echo $res = $a % $b;
                break;
            }
        case "<=>": 
            if($a > $b){ 
                echo "{$a} > {$b}"; 
                break; 
            }else if($a < $b){ 
                echo "{$a} < {$b}"; 
                break; 
            }else{ 
                echo "{$a} = {$b}"; 
                break; 
            }
            
    }
}else{
    echo "Введены некорректные данные";
}





    
