<?php

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (is_numeric($a) && is_numeric($b)) {
        switch ($c) {
            case "+":
                echo $a + $b;
                break;
            case "-":
                echo $a - $b;
                break;
            case "/":
                if ($b == 0) {
                    echo "Cannot divide by 0";
                    break;
                }

                echo $a / $b;
                break;
            case "*":
                echo $a * $b;
                break;
            case "**":
                $res = 1;
                while ($b > 0) {
                    $res = $res * $a;
                    $b--;
                }
                
                echo $res;
                break;
            case "==":
                if ($a === $b){
                    echo "Numbers are equal";
                } else {
                    echo "Numbers are not equal";
                }

                break;
            case "%":
                if ($b == 0){
                    echo "Cannot divide by 0";
                    break;
                }
                   
                
                if ($b > $a) {
                    echo $a;
                    break;                    
                }

                $div = floor($a / $b);
                echo ($a - ($div * $b));
                
                break;

            default:
                echo "Wrong operation";
        }
    } else {
        echo "Please, provide numbers";
    }
?>