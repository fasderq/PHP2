<?php

require_once __DIR__ . '/autoload.php';

$news = \App\Model\Article::findAll();

include __DIR__ . '/View/adminpanel.php';

?>

