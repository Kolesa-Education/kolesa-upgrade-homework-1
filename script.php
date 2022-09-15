<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$sql = "INSERT INTO test(a, b, c)
VALUES ('$a','$b','$c')";
switch ($c) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "*":
        echo $a * $b;
        break;
    
    case "/":
        echo $a / $b;
        break;
	case "**":
        echo $a ** $b;
        break;
	case "//":
        echo $a % $b;
        break;
	default:
        echo "не правильный запрос";
        break;
}
?>
