<?php

require_once  __DIR__ . '/autoload.php';

$view = new \App\View();
$view->lastnews = \App\Model\Article::findLastNews(3);
$html = $view->render(__DIR__ . '/View/general.php');
echo $html;

?>