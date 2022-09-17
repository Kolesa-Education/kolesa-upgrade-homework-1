
<?php
require "header.php";

//print_r($_GET);

$digit1 = $_GET['digit1'];
$digit2 = $_GET['digit2'];
$operation = $_GET['operation'];

//$digit1 = "2";
//$digit2 = "2";
//$operation = "**";


if (!is_numeric($digit1)) {
    echo 'Значение должно быть строкой';
    return;
}
if (!is_numeric($digit2)) {
    echo 'Значение должно быть строкой';
    return;
}
$digit1=(float)$digit1;
$digit2=(float)$digit2;
if (empty($digit1) && empty($digit2) &&  empty($operation) ) {
    echo 'одно из значений не передано!';
    return;
}

getResult($digit1,$digit2,$operation);


function getResult($digit1,$digit2,$operation){



    switch ($operation) {
        case "+":
            $result=$digit1 + $digit2;
            echo "Ответ  {$result} ";
            break;
        case "-":
            $result=$digit1 - $digit2;
            echo "Ответ  {$result} ";
            break;
        case "/":

            if ($digit2 == '0') {
                echo 'На ноль делить нельзя';
            }else{

                $result=$digit1 / $digit2;
                echo "Ответ  {$result} ";
            }

            break;
        case "*":
            $result=$digit1 * $digit2;
            echo "Ответ  {$result} ";

            break;
        case "%":
            $result=$digit1 % $digit2;
            echo "Ответ  {$result} ";

            break;
        case "**":
            $result=1;
            if ($digit2 == 0){
                $result=1;
                echo "Ответ  {$result} ";
                break;
            } else if ($digit2 == 1){
                $result=$digit1;
                echo "Ответ  {$result} ";
                break;
            }
            for ($i = 1; ; ) {
                if ($i > $digit2) {

                    break;
                }
                $result=$result*$digit1;
                $i++;
            }

            echo "Ответ  {$result} ";

            break;
        default:
            echo "не правильная операция";
    }


}




