<?php
require "header.php"
?>

<form method="GET" action="get_check.php">

    <label><p>Введите первое число</p><input type="text" name="digit1" class="form-control"></label><br>
    <label><p>Введите второе число</p><input type="text" name="digit2" class="form-control"></label><br>
    <label><p>Введите операцию(+,-,*,/,%, ** - степень)</p><input type="text" name="operation" class="form-control"></label><br>

    <button type="submit" class="btn btn-cuccess">Выполнить</button>

</form>
</body>
</html>


