
<?php

function checkIfAllInputsExist() {
  if(!(isset($_GET['a'], $_GET['b'], $_GET['c']))) {
    return false;
  }
  return true;
}

if(!checkIfAllInputsExist()) {
  exit("Please, check your inputes. Some of them do not exist. \n");
}

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

function checkIfNumeric($firstInput, $secondInput) {
  if(!is_numeric($firstInput) || !is_numeric($secondInput)) {
    return false;
  }
  return true;
}

function calculate($a,$b,$c) {
  switch ($c) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "/":
        if ($b == 0) {
          echo "Not a number";
        } else {
          echo $a / $b;
        }
        break;
    case "*":
        echo $a * $b;
        break;
    case "%":
        echo ($b / 100) * $a;
        break;
    case "^":
        echo pow($a, $b);
        break;
    case ">":
        $bool_val = $a > $b;
        echo $bool_val ? $a.' больше $b '.$b : $a.' меньше '.$b;
        break;
    case "<":
        $bool_val = $a < $b;
        echo $bool_val ? $a.' меньше '.$b : $a.' больше $b '.$b;
        break;
    default:
        echo "не правильная операция";
  }
}

if(!checkIfNumeric($a, $b)) {
  exit("Please, check your inputes. They are not numeric. \n");
} 
calculate($a,$b,$c);