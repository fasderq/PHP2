<?php

require_once  __DIR__ . '/autoload.php';

$lastnews = \App\Model\Article::findLastNews(3);

require __DIR__ . '/View/general.php';

?>