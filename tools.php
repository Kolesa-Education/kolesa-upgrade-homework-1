<?php 

/* 
	Функция возвращающая результат операции в виде численного значения. 
	Если нужного оператора нету, возвращает null
*/
function getOperationResult($operand1, $operand2, $operator, $general=true){
	if (!is_numeric($operand1) || !is_numeric($operand2)) {
		return null;
	}

	switch ($operator) {
		case ' ':
			return $operand1+$operand2;
		case '-':
			return $operand1-$operand2;
		case '*':		
			return $operand1*$operand2;
		case '/':	
			return $operand1/$operand2;
		case '^':	
			return $operand1**$operand2;
		case '%':
			return $operand1*$operand2/100;
		case '=':	
			return !$general ? $operand1==$operand2 : null;
		case '>':
			return !$general ? $operand1>$operand2 : null;
		case '<':	
			return !$general ? $operand1<$operand2 : null;
		default:
			return null;
	}
}

/*
	Функция проверяет валидность оператора
*/
function validateOperator($character){
	$operators = [' ', '-', '*', '/', '%', '^'];
	return in_array($character, $operators);
}

/*
	Функция находит приоритетные операции, расчитывает их значения. 
	После нахождения результат, выражение в главном массиве заменяется на результат выражения

*/
function makePrioritizedOperations($expression){
	if(is_null($expression)){
		return null;
	}

	$high_operators = ['^', '%'];
	foreach ($high_operators as $operator) {
		while(in_array($operator, $expression)){
			$pos = array_search($operator, $expression);
			$expression = replaceExpressionByResult($expression, $pos, $operator);

		}
	}

	while(in_array("/", $expression) || in_array("*", $expression)){
		$pos = getTheClosestOperator($expression);
		if($pos <= 0 || $pos > count($expression)){
			break;
		}
		$expression = replaceExpressionByResult($expression, $pos, $expression[$pos]);
	}
	return $expression;
}

/*
	Функция находит и возвращает позицию ближайшего оператора
*/
function getTheClosestOperator($expression, $first_operator="/", $second_operator="*"){
	$first_pos = array_search($first_operator, $expression);
	$second_pos = array_search($second_operator, $expression);
	$first_pos = !$first_pos ? 99999 : $first_pos;
	$second_pos = !$second_pos ? 99999 : $second_pos;
	return $first_pos <= $second_pos ? $first_pos : $second_pos;
}


/*
	Заменяет выражение a x b(х - оператор) на результат выражения
*/
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

/*
	Трансформация исходного массива. Позволяет работать с многозначными числами и процентами.
*/
function transformInput($expression){
	$result = [];
	$cur_num = -1;
	foreach ($expression as $index => $character) {
		$inter_res = makeTransformationDecision($character, $cur_num, $expression, $index, $result);
		if (is_null($inter_res)) {
			return null;
		}
		$character = $inter_res["character"];
		$cur_num = $inter_res["cur_num"];
		$expression = $inter_res["expression"];
		$result = $inter_res["result"];
	}
	return $result;
}

/*
	Функция производит действие с элементом для внесения в результирующий массив исходя из его типа данных.
*/
function makeTransformationDecision($character, $cur_num, $expression, $index, $result){
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
	return ["character" => $character, "cur_num" => $cur_num, "expression" => $expression, "result" => $result];
}




/*
	Реализация функции сравнения
*/
function makeComparison($expression, $str_expression){
	$comp_symbols = ['>', '<', '='];
	foreach($comp_symbols as $symbol){
		if(in_array($symbol, $expression)){
			$result_array = explode($symbol, $str_expression);
			if(is_null(validateComparisonArray($result_array))){
				return null;
			}
			return getOperationResult($result_array[0], $result_array[1], $symbol, false);

		}
	}
	return null;
}

/*
	Валидация сравнивоемого выражения
*/
function validateComparisonArray($result_array){
	if(count($result_array) > 2 || count($result_array) < 2){
		return null;
	}
	if(!is_numeric($result_array[0]) || !is_numeric($result_array[1])){
		return null;
	}
	return true;
}

?>