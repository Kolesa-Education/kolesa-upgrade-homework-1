<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calc</title>
</head>
<body>
<form action="" method="GET">
    <label for="a">a:</label>
    <input type="text" name="a" value="<?= $_GET['a'] ?>">
    <select name="operator" value="<?= $_GET['$operator'] ?>">
        <option value="None">Оператор</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
        <option value="**">**</option>
        <option value="%">%</option>
        <option value=">">></option>
        <option value="<"><</option>
    </select>
    <label for="b">b:</label>
    <input type="text" name="b" value="<?= $_GET['b'] ?>">
    <span>=</span>
    <?php

    if (isset($_GET['submit'])) {
        $a = $_GET['a'];
        $operator = $_GET['operator'];
        $b = $_GET['b'];

        if (empty($a) || empty($b)) {
            echo "Заполните поле";
        } else {
            if (is_numeric($a) && is_numeric($b)) {
                switch ($operator) {
                    case "None":
                        echo "Выберите оператор";
                        break;
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
                    case "**":
                        echo $a ** $b;
                        break;
                    case "%":
                        echo $a % $b;
                        break;
                    case ">":
                        $currentResult = $a > $b ? "Верно" : "Не Верно";
                        echo $currentResult;
                        break;
                    case "<":
                        $currentResult = $a < $b ? "Верно" : "Не Верно";
                        echo $currentResult;
                        break;
                    case "=":
                        $currentResult = $a == $b ? "Верно" : "Не Верно";
                        echo $currentResult;
                        break;
                }
            } else {
                echo "Введите число";
            }
        }

    }

    ?>
    <button type="submit" name="submit" value="submit">Calc</button>

</form>
</body>
</html>
