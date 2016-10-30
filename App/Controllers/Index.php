<?php

namespace App\Controllers;

use App\Controller;
use App\Model\Article;


class Index
    extends Controller
{

    public function actionDefault()
    {

        $this->view->news = Article::findLastNews(3);
        $html = $this->view->render(__DIR__ . '/../../View/news/general.view.php');

        echo $html;

    }
}

?>