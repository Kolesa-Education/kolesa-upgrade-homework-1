<?php
require "index.html";
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$sql = "INSERT INTO index(a, b, c)
VALUES ('$a','$b','$c')";
echo 'ответ: ';
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
        if ($b != 0) {
            echo $a / $b;
        }  else {
            echo "на ноль делить нельзя";
        }
        
        break;
	case "**":
        if ($a == 0 && $b < 0) {
            echo "не определено";
        }  else {
            echo $a % $b;
        }
        break;
	case "//":
        if ($b != 0) {
            echo $a % $b;
        }  else {
            echo "модуля нуля не существует";
        }
        break;
	default:
        echo "не правильный запрос";
        break;
}
?>