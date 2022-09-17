<?php
if (empty($_GET)) {
    echo "Ничего не передано";
    exit();
} else {
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];

	$ops = array(urldecode("+"), "-", "/", "*");

	if ((!is_numeric($a)) or (!is_numeric($b))) {
    	echo "Проверьте корректность введенных цифр! Нужно ввести число!";
    	exit();
    }
    else if (!in_array($c, $ops)) {
    	echo "Не правильный оператор {$c}";
    	exit();
	} else {
			switch ($c) {
			case urldecode("+"):
				echo "Сложение: ", $a + $b;
				break;
			case "-":
				echo "Вычитание: ", $a - $b;
				break;
			case "*":
				echo "Умножение: ", $a * $b;
				break;
			case "/":
				if($b == 0){
					echo "Деление на 0 невозможно!";
				} else {
					echo "Деление: ", $a / $b;
					break;
				}
			default:
				exit();
		}
	}
}
?>