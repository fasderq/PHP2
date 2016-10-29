<?php

namespace App\Controllers;

use App\Controller;
use App\Model\Article;


class News
    extends Controller
{

    public function actionOne()
    {
        $this->view->article = Article::findById($_GET['id']);
        $html = $this->view->render(__DIR__ . '/../../View/news/article.view.php');
        return $html;
    }

    public function actionAll()
    {

        $this->view->news = Article::findAll();
        $html = $this->view->render(__DIR__ . '/../../View/news/general.view.php');
        return $html;

    }

}

?>



