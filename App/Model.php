<?php

namespace App\Model;

use App\Db;

abstract class Model

{
    public static $table = '';
    public static $config = '';

    public static function findAll()
    {
        $db = new Db(static::$config);
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );
        return $data;
    }

    public static function findById($id)
    {
        $db = new Db(static::$config);
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE id = ' . $id,
            [],
            static::class
        );
        return $data[0];


    }

}

