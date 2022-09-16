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

<?php
$a = $_GET['a'] ?? null;
$b = $_GET['b'] ?? null;
$c = $_GET['c'] ?? null;
if (!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['c'])) {
    echo "данные не введены";
    exit;
}
if (is_numeric($a) && is_numeric($b)) {
    echo 'Результат: ';
    calc($a, $b, $c);
} else {
    echo "'a' и 'b' должны быть численными";
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
            if ($b != 0)
                echo $a / $b;
            else
                echo "нельзя делить на ноль";
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