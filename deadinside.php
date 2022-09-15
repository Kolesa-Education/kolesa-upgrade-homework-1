<?php
    require "index.html";
    $name = $_GET['name'];
    for ($x = 1000; $x > 0; $x-=7) {
        echo $x . ' - 7';
        echo '<br/>';
    }
    echo $name . ' дед инсайд';
?>