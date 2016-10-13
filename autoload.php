<?php

function __autoload($className)
{

    $path =  __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';

    require $path;

}

