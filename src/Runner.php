<?php

namespace App\Runner;

use function App\Validator\validateQueryString;
use function App\Calculator\calculate;

function run(array $args): float|string
{
    if (validateQueryString($args, ['fArg', 'sArg', 'oper']) === false) {
        return 'invalid query string
            the request should look like: ?fArg=(float/int)&sArg=(float/int)&oper=(arithmetic operators)';
    }
    $firstArg = floatval($args['fArg']);
    $secondArg = floatval($args['sArg']);
    $operator = $args['oper'];

    return calculate($firstArg, $secondArg, $operator);
}
