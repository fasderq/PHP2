<?php

namespace App\Controllers;

use App\Controller;
use App\Model\Article;


class Index
    extends Controller
{

    public function actionDefault()
    {
        $news= Article::findLastNews(3);

        if(empty($news)) {

            throw new \Exception('Статьи не найдены');

        } else {

            $this->view->news = $news;
            $this->view->display('news/general.view.html');

        }
    }

}

?>