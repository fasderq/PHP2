<?php

require_once  __DIR__ . '/autoload.php';

$lastnews = \App\Model\Article::findLastThree();

require __DIR__ . '/View/general.php';

?>