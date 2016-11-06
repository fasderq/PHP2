<?php

namespace App\Controllers;

use App\Controller;
use App\Model\Article;

class News
    extends Controller
{

    public function actionOne()
    {
        $id = $_GET['id'] ?? null;
        $article = Article::findById($id);

        if (empty($article)) {

            throw new \Exception('Такой статьи не существует :(');

        } else {

            $this->view->article = $article;
            $this->view->display('news/article.view.html');

        }
    }

    public function actionAll()
    {
        $news = Article::findAll();

        if (empty($news)) {

            throw new \Exception('Новостей нет');

        } else {

            $this->view->news = $news;
            $this->view->display('news/allnews.view.html');

        }
    }

}

?>



