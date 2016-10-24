<?php

require_once __DIR__ . '/autoload.php';

$view = new \App\View();
$view->news = \App\Model\Article::findAll();
$html = $view->render(__DIR__ . '/View/adminpanel.php');
echo $html;

?>

