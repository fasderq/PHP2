<?php

require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->news = \App\Model\Article::findById($_GET['id']);
$html = $view->render(__DIR__ . '/View/onenew.php');

echo $html;

?>