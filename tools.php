<?php 


function getOperationResult($operand1, $operand2, $operator, $general=true){
	/* 
		Функция возвращающая результат операции в виде численного значения. 
		Если нужного оператора нету, возвращает null
	*/
	$result = 0;
	switch ($operator) {
		case ' ':
			
			$result =  $operand1+$operand2;
			break;
		case '-':
			
			$result =  $operand1-$operand2;

			break;
		case '*':
			
			$result =  $operand1*$operand2;

			break;
		case '/':
			
			$result =  $operand1/$operand2;

			break;
		case '^':
			
			$result =  $operand1**$operand2;

			break;
		case '%':
			
			$result =  $operand1*$operand2/100;

			break;

		case '=':
			
			$result = !$general ? $operand1==$operand2 : null;

			break;
		case '>':
			
			$result =  !$general ? $operand1>$operand2 : null;

			break;
		case '<':
			
			$result =  !$general ? $operand1<$operand2 : null;

			break;
		default:
			
			$result =  null;
			break;
	}
	return $result;
}

function validateOperator($character){
	$operators = [' ', '-', '*', '/', '%', '^'];
	if(in_array($character, $operators)){
		return true;
	}
	return false;
}

function makePrioritizedOperations($expression){
	/*
		Функция находит приоритетные операции, расчитывает их значения. 
		После нахождения результат, выражение в главном массиве заменяется на результат выражения

	*/
	$high_operators = ['^', '%'];
	//$operators = ['/', '*'];

	foreach ($high_operators as $operator) {
		while(in_array($operator, $expression)){
			//echo  count($expression) . ' ' . $operator . ' ' . implode($expression) . PHP_EOL;
			$pos = array_search($operator, $expression);
			$expression = replaceExpressionByResult($expression, $pos, $operator);
			if(is_null($expression)){
				return null;
			}

		}
	}

	while(in_array("/", $expression) || in_array("*", $expression)){
		$first_pos = array_search("/", $expression) == false ? 99999 : array_search("/", $expression);
		$second_pos = array_search("*", $expression) == false ? 99999 : array_search("*", $expression);
		$pos = $first_pos <= $second_pos ? $first_pos : $second_pos;
		$operator = $first_pos <= $second_pos ? "/" : "*";
		if($pos <= 0){
			break;
		}
		$expression = replaceExpressionByResult($expression, $pos, $operator);
		if(is_null($expression)){
			return null;
		}
	}
	return $expression;
}

function replaceExpressionByResult($expression, $pos, $operator){
	$result = getOperationResult($expression[$pos-1], $expression[$pos+1], $operator);
	if(is_null($result)){
		return null;
	}
	$expression[$pos-1] = $result;
	unset($expression[$pos]);
	unset($expression[$pos+1]);
	return array_values($expression);

}


function transformInput($expression){
	/*
		Трансформация исходного массива. Позволяет работать с многозначными числами и процентами.
	*/
	$result = [];
	$cur_num = -1;
	foreach ($expression as $index => $character) {

		if($index == (count($expression)-1)){
			if($cur_num == -1){
				array_push($result, $character);
			}else{
				array_push($result, $cur_num.$character);
			}
			
		}

		if (is_numeric($character)) {
			if($cur_num==-1){
				$cur_num=$character;
			}else{
				$cur_num.=$character;
			}
		}
		elseif(validateOperator($character)){
			array_push($result, $cur_num, $character);
			$cur_num = -1;

		}elseif(is_numeric(bin2hex($character))){
			array_push($result, $cur_num, "%");
			$cur_num = bin2hex($character);
			if($index == (count($expression)-1)){
				array_push($result, $cur_num);
			}

		}
		else{
			return null;
		}
	}
	return $result;
}


function makeComparison($expression, $str_expression){
	/*
		Реализация функции сравнения
	*/
	$comp_symbols = ['>', '<', '='];
	foreach($comp_symbols as $symbol){
		if(in_array($symbol, $expression)){
			$result_array = explode($symbol, $str_expression);
			if(count($result_array) > 2 || count($result_array) < 2){
				return null;
			}
			if(!is_numeric($result_array[0]) || !is_numeric($result_array[1])){
				return null;
			}
			return getOperationResult($result_array[0], $result_array[1], $symbol, false);

		}
	}
	return null;
}

?>