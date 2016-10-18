<?php

require_once __DIR__ . '/autoload.php';

if (isset($_POST['edit'])) {

    $edit = \App\Model\Article::findById($_POST['edit']);

} else {

    $artile = new \App\Model\Article();
    $artile->id = $_POST['delete'];
    $artile->delete();

}

$news = \App\Model\Article::findAll();

include __DIR__ . '/View/adminpanel.php';

?>