<?php

//error_reporting(-1);

/*
include_once '/var/www/phpless/data.php';
echo $a;
echo $y;*/

/*$path = __DIR__ . '/data.php';
echo $path;*/


//declare(strict_types=1);

class A
{
    public $x;
}

$a = new A;

function dump(int $x): string
{
    return $x;
}

var_dump(dump(5));




  