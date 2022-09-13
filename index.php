<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {

    $a = $_GET['a'];
    $b = $_GET['b'];

    $c = $_GET['c'];

    if (is_numeric($a) && is_numeric($b)){
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
                echo pow($a,$b);
                break;
            case "%":
                echo $a*($b/100);
                break;
            default:
                echo "Invalid operator";
        }
    }else{
        echo "Wrong operation";
    }


}
?>

<form action="index.php">
    a: <input type="text" name="a"/>
    b: <input type="text" name="b"/>
    c: <input type="text" name="c"/>
    <button type="submit">Calculate</button>
</form>
