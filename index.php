<!DOCTYPE html>
<html>
<head>
<title>A Web Page</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap');

.form_class{
    position: relative;
    justify-content: space-around;
    display: flex;
    margin: 10px 150px 20px 200px;
}
.variables{
    width: 287px;
height: 54px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 300;
font-size: 16px;
line-height: 20px;
text-align: center;

color: #000000;

}
.calculator{
    width: 152px;
height: 39px;

font-family: 'Montserrat';
font-style: normal;
font-weight: 500;
font-size: 32px;
line-height: 39px;
margin: 100px 150px 50px 650px;
}
.operator{
    width: 50px;
height: 50px;
    font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 24px;
line-height: 29px;

text-align: center;
margin: 5px 20px 5px 20px;

color: #1C1D1E;
}
.operators_class{
    display: flex;
    margin: 10px 150px 20px 550px;
}
.answer_wrapper{
    position: relative;
    justify-content: space-around;
    display: flex;
    margin: 50px 150px 20px 200px;
}
.answer_word{
    font-family: 'Montserrat';
font-style: normal;
font-weight: 300;
font-size: 25px;
line-height: 39px;
margin: 10px 0px 0px 0px;
}
.answer{
    width: 287px;
height: 54px;
font-family: 'Montserrat';
font-style: normal;
font-weight: 300;
font-size: 16px;
line-height: 20px;
text-align: center;

color: #000000;
border: 1px solid rgba(0, 0, 0, 0.5);
box-sizing: border-box;
align-items:center;
padding: 15px;
}
</style>
</head>
<body style='background: #FCFCFC;'>
<div class="calculator">
    КАЛЬКУЛЯТОР
</div>
<form method="get">
    <div class="form_class">
        <input class='variables' type="text" name="a" placeholder="Введите первое число">
        <input class='variables' type="text" name="b" placeholder="Введите второе число">

    </div>
    <div class="operators_class">
        <input class='operator' type="submit" name='c' value='+'>
        <input class='operator' type="submit" name='c' value='-'>
        <input class='operator' type="submit" name='c' value='*'>
        <input class='operator' type="submit" name='c' value='/'>
        <input class='operator' type="submit" name='c' value='%'>


    </div>
    <div class="operators_class">
        <input class='operator' type="submit" name='c' value='>'>
        <input class='operator' type="submit" name='c' value='<'>
        <input class='operator' type="submit" name='c' value='!'>
        <input class='operator' type="submit" name='c' value='&#8730'>
    </div>
    <div class="operators_class">
        <input class='operator' style='width: 400px;' type="submit" name='c' value='Введение в степень'>
    </div>
</form>

<p>
        
<?php

function compare($a, $b) {
    if ($a > $b) {
        return "Правда";
    } else if ($a == $b) {
        return "Переменные равны";
    } else {
        return "Неправда";
    }
}

$a = $_GET['a'] ?? null;
$c = $_GET['c'] ?? null;
$answer = null;

if ($c=="!" || $c == "√") {
    $b = 0;
} else {
    $b = $_GET['b'] ?? null;
}

if (is_numeric($a) && is_numeric($b)) {
    switch ($c) {
        case "+":
            $answer = $a + $b;
            break;
        case "-":
            $answer = $a - $b;
            break;
        case "*":
            $answer = $a * $b;
            break;
        case "/":
            if ($b == 0) {
                $answer = "Деление на ноль невозможно";
                break;
            } else {
                $answer = $a + $b;
                break;
            }
        case ">":
            $answer = compare($a, $b);
            break;
        case "<":
            $answer = compare($b, $a);
            break;
        case "%":
            $answer = $a * $b / 100;
            break;
        case "√":
            if ($a<0) {
                $answer = '-'.strval(sqrt(-$a));
                break;
            }
            $answer = sqrt($a);
            break;
        case "Введение в степень":
            $mult = $a;
            for ($i = 2; $i <= $b; $i++) {
                $mult *= $a;
            }
            $answer = $mult;
            break;
        case "!":
            $mult = 1;
            for ($i = 1; $i <= $a; $i++) {
                $mult *= $i;
            }
            $answer = $mult;
            break;
        default:
            $answer = "";
    }
} else if (is_null($a) || is_null($b) || is_null($c)) {
    $answer = "";
}else {
    $answer = "Введенная переменная не является числовой";
}


echo '<div class="answer_wrapper"><div class="answer_word">ОТВЕТ:</div><div class="answer">'.$answer.'</div></div>';
?>
            
</p>



</body>
</html>