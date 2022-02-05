<?php

use classes\BloggsCommsManager;
use classes\CommsManager;

require_once __DIR__ . '/vendor/autoload.php';

/*function autoload($class)
{
    $class = str_replace("\\",'/', $class);
    $file = __DIR__ . "/{$class}.php";
    require_once $file;
}
spl_autoload_register('autoload');*/


$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->getAppEncoder()->encoder();
print $mgr->getFooterText();



