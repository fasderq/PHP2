<?php


namespace App;


class Functions
{

    public static function getFunctions()
    {

        $header = function (\App\Model\Article $article) {
            return $article->header;
        };

        $text = function (\App\Model\Article $article) {
            return $article->text;
        };

        $id = function (\App\Model\Article $article) {
            return $article->id;
        };

        $author = function (\App\Model\Article $article) {
            return $article->author->name;
        };

        $data = [
            'header' => $header,
            'text' => $text,
            'id' => $id,
            'author' => $author
        ];

        return $data;

    }

}

?>