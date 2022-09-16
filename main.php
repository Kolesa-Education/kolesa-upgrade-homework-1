//го беспощадный ревью

<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
// ^    степень
// !    корень
// ?    сравнение
// %    процент

//проверка на наличие необходимых переменных в GET- запросе
if (isset($_GET['a'], $_GET['b'], $_GET['c'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
} else {
    echo "Не хватает переменных!";
    return;
}

    //Проверка на соответствие формата переменных
    if (!is_numeric($a) || !is_numeric($b)) {
        echo "Неверный формат";
        return;
    }
        switch ($c) {
            case "+":
                echo $a + $b;
                break;
            case "-":
                echo $a - $b;
                break;
            case "/":
                if ($b == 0){
                    echo "На ноль делить нельзя!";
                    break;
                }
                echo $a / $b;
                break;
            case "*":
                echo $a * $b;
                break;
            case "^": //возвести $a в степень $b
                echo pow($a, $b);
                break;
            case "!": //извлечени корня с показателем $b из числа $a
                print $a ** (1 / $b);
                break;
            case "?": //сравнение чисел
                if ($a < $b) {
                    print "a<b";
                } else if ($a > $b) {
                    print "a>b";
                } else {
                    print "a=b";
                }
                break;
            case "%": //вычислить $b процент от числа $a
                print ($b / 100) * $a;
                break;
            default:
                echo "Неизвестный оператор";
        }

?>