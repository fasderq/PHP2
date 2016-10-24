<?php

require_once __DIR__ . '/autoload.php';


$view = new \App\View();

if (isset($_POST['edit'])) {

    $view->edit = \App\Model\Article::findById($_POST['edit']);

} else {

    $artile = new \App\Model\Article();
    $artile->id = $_POST['delete'];
    $artile->delete();

}

$view->news = \App\Model\Article::findAll();
$html = $view->render(__DIR__ . '/View/adminpanel.php');
echo $html;

?>