<?php

namespace App\Controllers;

use App\AdminDataTable;
use App\Auth;
use App\Functions;
use App\Model\Article;

class Adminpanel
    extends Auth

{

    public function actionAllNews()
    {
            $news = Article::findAll();

            if (empty($news)) {

                throw new \Exception('Новостей нет');

            } else {

                $this->view->news = $news;
                $this->view->display('admin/adminpalnel.view.html');

            }
    }

//    public function actionEdit()
//    {
//        if ($_POST) {
//
//            $article = new Article();
//
//            $article->id = $_POST['id'];
//            $article->header = $_POST['header'];
//            $article->text = $_POST['text'];
//            $article->author_id = $_POST['author_id'];
//            $article->save();
//
//            $this->view->display(__DIR__ . '/../../View/admin/edit.view.php');
//
//        } else {
//
//            $this->view->news = Article::findById($_GET['id']);
//
//            $this->view->display(__DIR__ . '/../../View/admin/edit.view.php');
//
//        }
//    }

//    public function actionAdd()
//    {
//        if ($_POST) {
//
//            $article = new Article();
//
//            $article->header = $_POST['header'];
//            $article->text = $_POST['text'];
//            $article->author_id = $_POST['author_id'];
//            $article->save();
//
//            $this->view->display(__DIR__ . '/../../View/admin/add.view.php');
//
//        } else {
//
//            $this->view->display(__DIR__ . '/../../View/admin/add.view.php');
//
//        }
//    }

//    public function actionDelete()
//    {
//        if($_GET['id']) {
//
//            $article = new Article();
//
//            $article->id = $_GET['id'];
//            $article->delete();
//
//            $this->view->news= Article::findAll();
//            $this->view->display(__DIR__ . '/../../View/admin/adminpanel.view.php');
//
//        } else {
//
//            throw new \Exception('не удалось удалить');
//
//        }
//    }

    public function actionEach()
    {
        $news = Article::findAllFetch();
        $this->view->news = $news;

        $this->view->display('admin/adminpalnel.view.html');

    }

    public function actionAdminDataTable()
    {
        $models = Article::findAll();
        $functions= Functions::getFunctions();

        $table = new AdminDataTable($models, $functions);
        $table->display('admin/admintable.view.html');
    }

}

?>