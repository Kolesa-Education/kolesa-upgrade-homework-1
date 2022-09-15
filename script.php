<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$sql = "INSERT INTO index(a, b, c)
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
        if ($b != 0) {
            echo $a / $b;
        }  else {
            echo "на ноль делить нельзя";
        }
        
        break;
	case "**":
        echo $a ** $b;
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
<form action='script.php' method='get'>
    <input type="number" name = "a" required>
    <select name = "c" required>
        <option value = "+"> сложение </option>
        <option value = "-"> вычитание </option>
        <option value = "/"> деление </option>
        <option value = "*"> умножение </option>
        <option value = "**"> степень </option>
        <option value = "//"> модуль </option>
    </select>
    <input type="number" name = "b" required>
    <input type='submit' value='Submit'>
</form>

