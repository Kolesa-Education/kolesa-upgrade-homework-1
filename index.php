<?php

include 'tools.php';

$func = $_GET['func'];

$str_expression = $_GET['expression'];
$expression = str_split($str_expression);








switch ($func) {
	case 'general':
		$expression = makePrioritizedOperations(transformInput($expression));
		if(is_null($expression)){
			echo "Error. Unknown symbol...";
			break;
		}
		$operator = ' ';
		$result = 0;
		for ($i=0; $i < count($expression); $i++) { 
			if(is_numeric($expression[$i])){
				$inter_res = getOperationResult($result, $expression[$i], $operator);
				if(is_null($inter_res)){
					echo "One of the operators is wrong...";
					break 2;
				}
				$result = $inter_res;
			}elseif (validateOperator($expression[$i])) {
				$operator = $expression[$i];
			}else{
				echo "Error. Unknown symbol...";
				break 2;
			}
		}
		echo "Result is " . strval($result);
		break;
	case 'comparison':
		$result = makeComparison($expression, $str_expression);
		if (is_null($result)) {
			echo "Somthing wrong...";
			break;
		}
		$result = $result ? "true" : "false";
		echo "Result: " . $result . PHP_EOL;;

		break;
	default:
		echo "FunctionError.Function unknown...";
		break;
}


?>