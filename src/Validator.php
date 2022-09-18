<?php

namespace App\Validator;

function validateQuery(array $queryParams): bool
{
    if (!isset($queryParams['fArg']) && !is_numeric($queryParams['fArg'])) {
        return false;
    }
    if (!isset($queryParams['sArg']) && !is_numeric($queryParams['sArg'])) {
        return false;
    }
    if (!isset($queryParams['oper'])) {
        return false;
    }
    return true;
}
