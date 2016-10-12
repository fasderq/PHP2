<?php


namespace App\Model;

require __DIR__ . '/../../errors.php';
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

    public static function findLastN($quantity)
    {

        $db = new Db(self::$config);
        $data = $db->query('SELECT * FROM ' . self::$table . ' ORDER BY id DESC LIMIT ' . $quantity, [], '\App\Model\Article');
        return $data;

    }

    public function insert($header, $article)
    {

        $sql = "INSERT INTO " . self::$table . " (`header`, `article`) 
            VALUES ('" . $header . "','" . $article . "')";
        return $sql;
    }

    public function update($id, $header, $aticle)
    {

        $sql = "UPDATE " . self::$table . " SET
`header`= '" . $header . "', `article` = '" . $aticle . "' WHERE id = " . $id;
        return $sql;
    }


}

var_dump(Article::findLastN('2'));


