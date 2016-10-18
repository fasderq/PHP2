<?php

require_once __DIR__ . '/autoload.php';

$article = new \App\Model\Article();
$article->header = $_POST['header'];
$article->text = $_POST['text'];
$article->id = $_POST['id'];
$article->save();

$news = \App\Model\Article::findAll();

include __DIR__ . '/View/adminpanel.php';

?>