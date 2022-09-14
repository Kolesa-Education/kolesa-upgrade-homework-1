<?php



if (isset($_GET['a']) && isset($_GET['b'])  && isset($_GET['c'])) {

    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    if (is_numeric($a) && is_numeric($b)) {
        calc($a, $b, $c);
    } else {
        echo "'a' и 'b' не являются численными ";
    }
} else {
    echo "данные не введены";
}


function calc($a, $b, $c)
{
    switch ($c) {
        case "+":
            echo $a + $b;
            break;
        case "-":
            echo $a - $b;
            break;
        case "/":
            echo $a / $b;
            break;
        case "*":
            echo $a * $b;
            break;
        case "^":
            echo pow($a, $b);
            break;
        case "compare":
            if ($a > $b)
                echo "$a > $b";
            if ($a < $b)
                echo "$a < $b";
            if ($a == $b)
                echo "$a = $b";
            break;
        case "%":
            echo $a / 100 * $b;
            break;
        default:
            echo "значение c='$c' не является оператором";
    }
}
?>

<pre style="color: grey;">
Список операторов:
%2B     => +
%2A     => *
%2F     => /
-       => -
compare => compare
^       => ^
%       => % 
</pre>
