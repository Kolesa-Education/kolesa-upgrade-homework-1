<?php

namespace App\Validator;

function validateKeys(array $params, array $requiredParams): bool
{
    $queryKeys = array_keys($params);
    return empty(array_diff($requiredParams, $queryKeys));
}

function validateValues(array $params, string $keyFirstArg, string $keySecArg): bool
{
    $firstArg = $params[$keyFirstArg];
    $secondArg = $params[$keySecArg];
    return is_numeric($firstArg) && is_numeric($secondArg);
}

function validateQueryString(array $queryParams, array $requiredParams): bool
{
    return validateKeys($queryParams, $requiredParams) && validateValues($queryParams, ...$requiredParams);
}
