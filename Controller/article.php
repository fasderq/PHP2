<?php

require __DIR__ . '/../autoload.php';

$news = \App\Model\Article::findById($_GET['id']);

require __DIR__ . '/../View/onenew.php';

?>