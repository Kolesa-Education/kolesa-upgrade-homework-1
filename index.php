<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Online calculator</title>
</head>

<body>
	<form method="get">
		First Value: <input class="value" type="text" name="a" /> 
		Operator: <input class="operator" type="text" name="c" size="1" /> 
		Second Value: <input class="value" type="text" name="b" />
		<input type="submit" value="Calculate" />
	</form>

	<?php

	function hasArgumentsSet() {
		return isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']);
	}

	function areValidNumbers() {
		return is_numeric($_GET['a']) && is_numeric($_GET['b']);
	}

	function isValidOperator() {
		$op = $_GET['c'];
		return $op == "+" || $op == "-" || $op == "*" || $op == "/"
			|| $op == "%" || $op == "^" || $op == ">"
			|| $op == "<";
	}

	if (!hasArgumentsSet()) {
		echo "Please, enter values and operator";
	} else if (!areValidNumbers()) {
		echo "Please, try another value. It must be number";
	} else if (!isValidOperator()) {
		echo "You can enter only '+', '-', '*', '/', '%', '^', '>', '<'";
	} else {
		$result = "Result is ";

		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];
		$result;

		switch ($c) {
			case "+":
				$result = $result . $a + $b;
				break;
			case "-":
				$result = $result . $a - $b;
				break;
			case "*":
				$result = $result . $a * $b;
				break;
			case "/":
				$result = $result . $a / $b;
				break;
			case "%":
				$result = $result . ($a * $b / 100);
				break;
			case "^":
				$result = $result . $a ** $b;
				break;
			case ">":
				$result = $result . ($a > $b ? "true" : "false");
				break;
			case "<":
				$result = $result . ($a < $b ? "true" : "false");
				break;
		}
		echo $result;
	}

	?>

</body>

</html>