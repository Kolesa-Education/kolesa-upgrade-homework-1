<?php
// %2B => +
// %2A => *
// %2F => /
// -   => -
$result = "";
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if (preg_match("#^[aA-zZ0-9]+$#",$c)) {
    echo "не правильно, нужен оператор \n"; //Проверка оператора
    exit;
 }

if (is_numeric($a) && is_numeric($b)){ //Проверка переданных переменных
    switch ($c) { 
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "/":
            $result = $a / $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "==": //Добавление дополительной функциональности
            $result = $a == $b;
            break;
        case "%": //Добавление дополительной функциональности
            $result = $a % $b;
            break;
        case "**": //Добавление дополительной функциональности
            $result = $a ** $b;
            break;
        default:
            $result = "не правильная операция";
    }
    
}else{
    echo "это не номер, иди отдохни";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <p>a: <input type="text" name="a" /></p>
        <p>b: <input type="text" name="b" /></p>
        <p>c: <input type="text" name="c" /></p>
        <p>result: <?= $result ?></p>
        <p><input type="submit" name="submit" value="Submit" /></p>
      </form>
</body>
</html>