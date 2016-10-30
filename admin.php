<?php

require_once __DIR__ . '/autoload.php';

$parts_uri = explode('/' , $_SERVER['REQUEST_URI']);

$ctrlRequest = !empty($parts_uri[1]) ? $parts_uri[1] : 'Index';
$ctrlClassName = '\App\Controllers\\' . ucfirst($ctrlRequest);
$ctrl = new $ctrlClassName;

$actRequest = !empty($parts_uri[2]) ? $parts_uri[2] : 'Default';

$ctrl->action($actRequest);

?>

