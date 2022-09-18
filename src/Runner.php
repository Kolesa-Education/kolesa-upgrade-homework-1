<?php

namespace App\Runner;

use function App\Validator\validateQuery;
use function App\Calculator\calculate;

function run(array $queryParams): float|string
{
    if (validateQuery($queryParams) === false) {
        return 'invalid query string
            the request should look like: ?fArg=(float/int)&sArg=(float/int)&oper=(arithmetic operators)';
    }
    $firstArg = floatval($queryParams['fArg']);
    $secondArg = floatval($queryParams['sArg']);
    $operator = $queryParams['oper'];

    return calculate($firstArg, $secondArg, $operator);
}
