<?php

/*$path = __DIR__ . '/classes/WordFactory.php';

echo '<pre>';
echo $path;
echo '</pre>';

require_once $path;*/

use classes\WordFactory;

function autoload($class)
{
    $class = str_replace("\\",'/', $class);
    $file = __DIR__ . "/{$class}.php";
    require_once $file;
}

spl_autoload_register('autoload');

$obj = new WordFactory();

$wd = $obj->hello();
echo $wd;




