<?php

// Проверить работу калькулятора можно тут - https://sitecodera.ru/demo/calc

if (isset($_GET['operator'])) {
	$a = $_GET['a'];
	$b = $_GET['b'];
	$operator = $_GET['operator'];

	if (is_numeric($a) && is_numeric($b)) {

		switch ($operator) {
			case "A+B":
				$result = $a + $b;
				break;
			case "A-B":
				$result = $a - $b;
				break;
			case "A*B":
				$result = $a * $b;
				break;
			case "A/B":
				if ($b == 0) {
					$error = "Ошибка! На ноль делить нельзя.";
				} else {
					$result = $a / $b;
				}
				break;
			case "Корень из A в степени B":
				//$result = sqrt($a);
				$result = $a ** (1/$b);
				break;
			case "A*B%":
				$result = $a*$b/100;
				break;
			case "А в степени B":
				$result = $a ** $b;
				break;
			case "Сравнить A и B":
				if ($a < $b) {
					$result = "A < B";
				} else if ($a > $b) {
					$result = "A > B";
				} else {
					$result = "A = B";
				}
				break;
		}
	} else {
		$error = "Ошибка! Введите A и B";
	}

}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Smolnikov</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form action="index.php" method="GET">

	<h1>Калькулятор</h1><br>
    <label for="a">Введите A:</label>
    <input type="number" name="a" value="<?= $a ?>"><br><br>
	<label for="b">Введите B:</label>
    <input type="number" name="b" value="<?= $b ?>"><br><br>
	<center>
	<input type="submit" value="A+B" name="operator">
	<input type="submit" value="A-B" name="operator">
	<input type="submit" value="A*B" name="operator">
	<input type="submit" value="A/B" name="operator"><br><br>
	<input type="submit" value="Корень из A в степени B" name="operator">
	<input type="submit" value="A*B%" name="operator"><br><br>
	<input type="submit" value="А в степени B" name="operator">
	<input type="submit" value="Сравнить A и B" name="operator"><br><br>	
	<label for="result">Ответ:</label>
	<input type="text" name="result" value="<?= $result ?>" disabled><br><br>
	<span><?= $error ?></span>
	</center>

</form>
</body>
</html>
