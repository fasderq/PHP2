<?php

require __DIR__ . '/../autoload.php';

$lastnews = \App\Model\Article::findLastN('3');

require __DIR__ . '/../View/general.php';