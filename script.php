<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
</head>
<body>
    <h1>Калькулятор Аскара</h1>
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
    <br/>
</body>
</html>

<?php
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