
<?php

function checkIfAllInputsExist() {
  if(!(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']))) {
    exit("Please, check your inputes \n");
  }
}

checkIfAllInputsExist();

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

function checkIfNumericOrNull() {
  $arg_list = func_get_args();
  for ($argIdx = 0; $argIdx < count($arg_list); $argIdx++) {
    $currentArgument = $arg_list[$argIdx];
    if(empty($currentArgument)) {
      exit(($argIdx+1)."th argument is null. Please, enter an integer or float \n");
    }
    if(!is_numeric($currentArgument)) {
      exit($currentArgument." is not a number or float \n");
    } 
  }
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
        echo $a / $b;
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

checkIfNumericOrNull($a, $b); 
calculate($a,$b,$c);