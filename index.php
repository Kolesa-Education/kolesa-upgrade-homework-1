<?php

require_once __DIR__ . "/vendor/autoload.php";

use function App\Runner\run;

echo run($_GET);
