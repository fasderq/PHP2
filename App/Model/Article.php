<?php


namespace App\Model;

require __DIR__ . '/../Db.php';
require __DIR__ . '/../Model.php';

use App\Db;


class Article
    extends Model

{

    public static $table = 'worldtoday';
    public static $config = __DIR__ . '/../../Config/tsconfig.json';
    public $id;
    public $header;
    public $article;

    public static function findLastN()
    {

        $db = new Db(self::$config);
        $data = $db->query('SELECT * FROM ' . self::$table . ' ORDER BY id DESC LIMIT 3' , [], '\App\Model\Article');
        return $data;

    }

    public function insert($header, $article)

    {

        $db = new Db(self::$config);
        $db->execute('INSERT INTO ' . self::$table . '(`header`, `article`) 
        VALUES (:header, :article)',
            [':header' => $header, ':article' => $article]);

    }

    public function update($id, $header, $article)

    {

        $db = new Db(self::$config);
        $db->execute('UPDATE ' . self::$table . ' SET 
        `header`=:header,`article`=:article WHERE id=:id',
            [':id' => $id, ':header' => $header, ':article' => $article]);

    }

    public function getHeader()

    {

        return $this->header;

    }


    public function getArticle()

    {

        return $this->article;

    }


    public function getId()

    {

        return $this->id;

    }


}



