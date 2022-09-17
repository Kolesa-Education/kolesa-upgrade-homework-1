<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Sayat Calc</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="form-validation.css" rel="stylesheet">
    </head>

    <body class="bg-light vsc-initialized">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Kolesa Update. Sayat Kaldarbekov. Homework 1</h2>
            </div>

            <div class="row">
                <div class="col-md-2 mb-4"></div>
                <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Calculator</h4>

                <form class="needs-validation" action="index.php" method="GET" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="num1">Введите А</label>
                            <input type="number" class="form-control" name="a" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="num2">Введите В</label>
                            <input type="number" class="form-control" name="b" value="">
                        </div>
                    </div>

                    <div class="row">
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="A+B" type="submit">A + B</button>
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="A-B" type="submit">A - B</button>
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="A*B" type="submit">A * B</button>
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="A/B" type="submit">A / B</button>
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="Корень из A в степени B" type="submit">Корень из A в степени B</button>
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="A*B%" type="submit">A*B%</button>
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="А в степени B" type="submit">А в степени B</button>
                        <button class="btn btn-primary col-md-3 m-3" name="option" value="Сравнить A и B" type="submit">Сравнить A и B</button>
                    </div>

                    <br><br>

                    <label for="result">Ответ:</label>

                    <?php
                        $a = $_GET['a'];
                        $b = $_GET['b'];

                        if (isset($_GET['option'])) {
                            if($_GET['option'] == 'A+B') {
                                $body = 'A + B = ';
                                $result = $a + $b;
                            }
                            else if($_GET['option'] == 'A-B') {
                                $body = 'A - B = ';
                                $result = $a - $b;
                            }
                            else if($_GET['option'] == 'A*B') {
                                $body = 'A * B = ';
                                $result = $a * $b;
                            }
                            else if($_GET['option'] == 'A/B') {
                                $body = 'A / B = ';
                                $result = $a / $b;
                            }
                            else if($_GET['option'] == 'Корень из A в степени B') {
                                $body = 'Корень из A в степени B = ';
                                $result = pow($a, 1/$b);
                            }
                            else if($_GET['option'] == 'A*B%') {
                                $body = 'A * B% = ';
                                $result = $a * $b / 100;
                            }
                            else if($_GET['option'] == 'А в степени B') {
                                $body = 'А в степени B = ';
                                $result = pow($a, $b);
                            }
                            else if($_GET['option'] == 'Сравнить A и B') {
                                if ($a > $b) {
                                    $body = 'A больше B: ';
                                    $result = $a . ' > ' . $b;
                                }
                                else if ($a < $b) {
                                    $body = 'A меньше B: ';
                                    $result = $a . ' < ' . $b;
                                }
                                else {
                                    $body = 'A равно B: ';
                                    $result = $a . ' = ' . $b;
                                }
                            }
                            
                            echo $body . $result;
                        }
                    ?>
                </form>
            </div>
        </div>
    </body>
</html>