<?php

// +----------------------------+
// | AutoLoader
// +----------------------------+

spl_autoload_register('drobilicaAutoLoader');
function drobilicaAutoLoader($className) {
    $path = dirname(__FILE__, 2) . "/classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    if (file_exists($fullPath)) {
        include_once $fullPath;
    }
    return false;
}