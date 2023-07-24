<?php

class Validator
{
    // we have included here static because it is pure function and it has no relation with the outside
// world of the function and to use this function we have to use it like Validator::string.
    public static function string($value, $min = 1, $max = INF)
    {
        $value = strlen(trim($value));

        return $value >= $min && $value <= $max;
    }


    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}