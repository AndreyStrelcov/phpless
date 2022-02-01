<?php

use classes\WordFactory;

require_once __DIR__ . '/vendor/autoload.php';

/*function autoload($class)
{
    $class = str_replace("\\",'/', $class);
    $file = __DIR__ . "/{$class}.php";
    require_once $file;
}

spl_autoload_register('autoload');*/

$obj = new WordFactory();

$wd = $obj->hello();
echo $wd;




