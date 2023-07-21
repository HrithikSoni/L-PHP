<?php

function dd($value)
{
    echo "<prev";
    var_dump($value);
    echo "</pre>";


    die();
}

function uriIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}