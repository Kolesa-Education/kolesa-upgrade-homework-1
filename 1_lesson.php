
<?php

//Проверка на ошибки

if (isset($_GET['op'])) {

    $a = $_GET['n1'];
    $b = $_GET['n2'];
    $op = $_GET['op'];


    if (is_numeric($a) && is_numeric($b)) {

        echo check_op($a, $b, $op);


    } else {

        echo "Ошибка!Не верно введены данные!";

    }

}   else {

    echo "Ошибка!";

}


// Функция калькулятора

function check_op($a, $b, $op){

    switch ($op)
    {
        case '+':
            $c = $a + $b;
            return "$a + $b = $c";
            break;

        case '-':
            $c = $a - $b;
            return "$a - $b = $c";
            break;

        case '*':
            $c = $a * $b;
            return "$a * $b = $c";
            break;

        case '/':
            if ($a == 0 ){
                return "Ты хочешь устроить апокалипсис? O_O";
                break;
            }
            $c = $a / $b;
            return "$a / $b = $c";
            break;

        case 'Xⁿ':
            $c = $a ** $b;
            return "$a в степени $b = $c";
            break;

        case 'на сколько % a>b?':
            $c = round((($a / $b) * 100)-100);
            return  "$a больше $b на $c".'%' ;
            break;

        case 'на сколько % a<b?':
            $c = round(100-(($b / $a) * 100));
            return "$a меньше $b на $c".'%' ;
            break;

        case 'на сколько % увеличить a=>b?':
            $c = round(($b*($b - $a)) / $a);
            return "Что бы получить $b надо $a увеличить на $c".'%';
            break;

        case 'на сколько % уменьшить a=>b?':
            $c = round(($b*($b - $a)) / $a);
            return "Что бы получить $b надо $a уменьшить на $c".'%';
            break;

        case 'Сравнить':
            $c = $a<$b ? $b-$a : $a-$b;

            if($a<$b){
                $dif = 'меньше';
            }elseif ($a == $b) {
                $dif = 'равно';
            }else{
                $dif = 'больше';
            }
            return "$a $dif $b на $c" ;
            break;

        case '√Xⁿ':
            $c = $a ** (1/$b);;
            return "Корень из $a в степени $b = $c" ;
            break;

        case '?':
            return '';
            break;

        default:
            return 'Что-то пошло не так!';
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Простой калькулятор</title>
</head>
<h1>Я калькулятор ^_^</h1>
</head>
<body>
<form action="" method="GET">
    <table align="left">

        <tr>
            <td><strong>Введите число a:<strong></td>
            <td><input type="number"  required="required" name="n1"></td>
        </tr>

        <tr>
            <td><strong>Введите число b:<strong></td>
            <td><input type="number"  required="required" name="n2"></td>
        </tr>
        <td><strong>Выберете оператор<strong></td>
        <tr>
            <td> <input type="submit" value="Xⁿ" name="op"> </td>
            <td> <input type="submit" value="+" name="op"> </td>
            <td> <input type="submit" value="на сколько % a>b?" name="op"> </td>
        </tr>
        <tr>
            <td> <input type="submit" value="√Xⁿ" name="op"> </td>
            <td> <input type="submit" value="-" name="op"> </td>
            <td> <input type="submit" value="на сколько % a<b?" name="op"> </td>
        </tr>
        <tr>
            <td> <input type="submit" value="Сравнить" name="op"> </td>
            <td> <input type="submit" value="*" name="op"> </td>
            <td> <input type="submit" value="на сколько % увеличить a=>b?" name= "op"> </td>
        </tr>
        <tr>
            <td> <input type="submit" value="?" name="op" onclick="location.href='https://www.youtube.com/watch?v=dQw4w9WgXcQ';"> </td>
            <td> <input type="submit" value="/" name="op"> </td>
            <td> <input type="submit" value="на сколько % уменьшить a=>b?"name="op"> </td>
        </tr>

        <tr></tr>
        <td></td>


</form>
</body>
</html>