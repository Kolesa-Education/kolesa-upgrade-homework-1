<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Calculator</title>
    </head>
    <body>
        <form method="GET" id = "form">
            <input type = "text" name = "a" placeholder = "Choose value a">
            <input type = "text" name = "b" placeholder = "Choose value b">
            <select name = "c">
                <option>Operator not selected</option>
                <option>add</option>
                <option>subtract</option>
                <option>multiply</option>
                <option>divide</option>
                <option>power</option>
                <option>percentage</option>
                <option>></option>
                <option><</option>
                <option>=</option>
                <option>sin()</option>
                <option>cos()</option>
            </select>
            <button type = "submit" name = "submit" value = "submit">=</button>
            <p>Answer:</p>
            <?php
                    error_reporting(E_ERROR | E_PARSE);
                    $a = $_GET['a'];
                    $b = $_GET['b'];
                    $c = $_GET['c'];
                    
                    if (!is_numeric($a) || !is_numeric($b)) {
                        echo "a and b must be numbers";
                    } else if (is_null($c) || $c == '') {
                        echo "put operator";
                    } else {

                    switch ($c){
                        case "add":
                            $d = $a + $b;
                            echo "$a + $b = $d";
                            break;
                        case "subtract":
                            $d = $a - $b;
                            echo "$a - $b = $d";
                            break;
                        case "divide":
                            if($b == 0){
                                echo "$a / $b, ";
                                echo "Cannot divide by 0, put different value for b";
                            }else{
                                $d = $a / $b;
                                echo "$a / $b = $d";
                            }
                            break;
                        case "multiply":
                            $d = $a * $b;
                            echo "$a * $b = $d";
                            break;
                        case "power":
                            $d = $a**$b;
                            echo "$a to the power of $b = $d";
                            break;
                        case "percentage":
                            echo $a * ($b / 100);
                            break;
                        case ">":
                            if($a > $b){
                                echo "Correct, ";
                                echo "$a > $b";
                            }else if($a < $b){
                                echo "Wrong, ";
                                echo "$a < $b";
                            }else{
                                echo "Wrong, ";
                                echo "$a = $b";
                            }
                            break;
                        case "<":
                            if($a > $b){
                                echo "Wrong, $a > $b";
                            }else if($a < $b){
                                echo "Correct, $a < $b";
                            }else{
                                echo "Wrong, $a = $b";
                            }
                            break;
                        case "=":
                            if($a > $b){
                                echo "Wrong, $a > $b";
                            }else if($a < $b){
                                echo "Wrong, $a < $b";
                            }else{
                                echo "Correct, $a = $b";
                            }
                            break;
                        case "sin()":
                                echo sin($a);
                                echo "\n";
                                echo sin($b);
                            break;
                        case "cos()":
                                echo cos($a);
                                echo "\n";
                                echo cos($b);
                            break;
                        default:
                            echo "Please, put one of the operations from dropdown" ;
                    }
                }
            ?>
        </form>
    </body>
</html>
