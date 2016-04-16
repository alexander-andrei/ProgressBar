<?php

/**
 * Autoload classes
 *
 * @param $className
 */
function __autoload($className) {
    $file = $className . '.php';
    if(file_exists($file)) {
        require_once $file;
    }
}