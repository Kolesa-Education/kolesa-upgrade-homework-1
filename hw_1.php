<?php

$a = $_GET[7];
$b = $_GET[8];
$c = $_GET["+"];

/*calc($a, $b, $c);*/

//дефолт медот
function calc(float $num1, float $num2, string $operation){
    if(!is_numeric($num1)|| !is_numeric($num2)|| !is_string($operation)) echo "неправильный ввод ";
    else {
        try {
            switch ($operation) {
                case "+":
                    echo $num1 + $num2;
                    break;
                case "-":
                    echo $num1 - $num2;
                    break;
                case "*":
                    echo $num1 * $num2;
                    break;
                case "/":
                    echo $num1 / $num2;
                    break;
                case "%":
                    echo $num1 % $num2;
                    break;
                case '^':
                    echo pow($num1, $num2);
                    break;
                case "||":
                    echo sqrt(pow($num1, 2) + pow($num2, 2)); //длина вектора тип
                    break;
                case "%":
                    echo $num2 % $num2;
                    break;
                case "^":
                    echo $num1 ^ $num2;
                    break;
                case "&":
                    echo $num1 & $num2;
                    break;
                case "|":
                    echo $num1 | $num2;
                    break;
                case "<<":
                    echo $num1 << $num2;
                    break;
                case ">>":
                    echo $num1 >> $num2;
                    break;
                default:
                    echo "неправильная операция";
            }
        } catch (DivisionByZeroError) {
            echo "На ноль делить нельзя";
        }
    }
}


// решил просто попробовать сделать иначе

function calc_alt( $a,  $b, string $c){
   if(!is_numeric($a)|| !is_numeric($b)|| !is_string($c)) echo "неправильный ввод ";
   else{
       try {
           $operations = [
               "+" => $a + $b,
               '-' => $a - $b,
               '/' => $a / $b,
               '%' => $a % $b,
               '||' => sqrt(pow($a, 2) + pow($b, 2)),
               '^' => $a ^ $b,
               '*' => $a * $b,
               'err'=> "такой операции не существует"
           ];
           foreach ($operations as $key => $value) {
            if ($key==$c) echo $value;
           }
       } catch (DivisionByZeroError) {
           echo 'На ноль делить нельзя ';
       }
   }
}

//третий варик
calc_alt_1(7,7,"s");
function calc_alt_1($a, $b, $c){
   if(!is_numeric($a)|| !is_numeric($b)|| !is_string($c)) echo "неправильный ввод ";
   else{
        try {
            $operations = [
                "+" => $a + $b,
                '-' => $a - $b,
                '/' => $a / $b,
                '%' => $a % $b,
                '||' => sqrt(pow($a, 2) + pow($b, 2)),
                '^' => $a ^ $b,
                '*' => $a * $b,
                '^' => $a ^ $b,
                '&' => $a & $b,
                'error' => "такой операции не существует"
            ];
            if (array_key_exists($c, $operations)) {
                echo $operations[$c];
            } else {
                echo $operations['error'];
            }
        }catch (DivisionByZeroError){
            echo "на ноль делить нельзя";
        }
    }
}

?>

