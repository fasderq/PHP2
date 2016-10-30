<?php

namespace App\Controllers;

use App\Auth;
use App\Model\Article;

class Adminpanel

    extends Auth
{

    public function actionAllNews()
    {

        $this->view->news = Article::findAll();
        $html = $this->view->render(__DIR__ . '/../../View/admin/adminpanel.view.php');

        echo $html;

    }

    public function actionEdit()
    {

        if ($_POST) {

            $article = new Article();

            $article->id = $_POST['id'];
            $article->header = $_POST['header'];
            $article->text = $_POST['text'];
            $article->author_id = $_POST['author_id'];
            $article->save();

            $html = $this->view->render(__DIR__ . '/../../View/admin/edit.view.php');
            echo $html;

        } else {

            $this->view->news = Article::findById($_GET['id']);
            $html = $this->view->render(__DIR__ . '/../../View/admin/edit.view.php');
            echo $html;

        }

    }

    public function actionAdd()
    {

        if ($_POST) {

            $article = new Article();
            $article->header = $_POST['header'];
            $article->text = $_POST['text'];
            $article->author_id = $_POST['author_id'];
            $article->save();

            $html = $this->view->render(__DIR__ . '/../../View/admin/add.view.php');
            echo $html;

        } else {

            $html = $this->view->render(__DIR__ . '/../../View/admin/add.view.php');
            echo $html;

        }
    }

}

?>