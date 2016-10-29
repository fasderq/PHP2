<?php

require_once __DIR__ . '/autoload.php';

$parts = explode('/', $_SERVER['REQUEST_URI']);

$ctrlRequest = !empty($parts[1]) ? $parts[1] : 'Index';
$ctrlClassName = '\App\Controllers\\' . ucfirst($ctrlRequest);
$ctrl = new $ctrlClassName;

$ctrl->action = !empty($parts[2]) ? $parts[2] : 'Default';


$actRequest = $ctrl->action;
$actMethodName = 'action' . ucfirst($actRequest);

if ($ctrl->action($actMethodName)) {

    $html = $ctrl->$actMethodName();
    echo $html;


} else {

    echo 'Доступ закрыт';
    die;

}

?>

