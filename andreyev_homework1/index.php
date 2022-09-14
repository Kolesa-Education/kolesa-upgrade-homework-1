<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calc.php" method="GET">
        <input type="text" name="a" required placeholder="Введите первое значение">
        <select name="c" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="^">^</option>
            <option value="√">√</option>
            <option value="%">%</option>
            <option value="<=>"><=></option>

        </select>
        <input type="text" name="b" required placeholder="Введите второе значение">
        <button type="submit">=</button>
    </form>
</body>
</html>