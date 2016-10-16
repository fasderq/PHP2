<?php

namespace App;

abstract class Model

{
    use Crud;
    public static $table = '';
    public $id;

    public static function findLastN()
    {

        $db = new Db();
        $data = $db->query('SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3', [], '\App\Model\Article');
        return $data;

    }

    public static function findAll()
    {
        $db = new Db();
        $data = $db->query(
            'SELECT * FROM ' . static::$table,
            [],
            static::class
        );

        return $data;

    }

    public static function findById($id)
    {

        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id =:id';
        $data = $db->query($sql, [':id' => $id], static::class);

        return $data[0] ?? false;

    }

    public function isNew()
    {

        return empty($this->id);

    }

    public function save()
    {

        if (true == $this->isNew()) {
            $this->insert();
        } else {
            $this->update();
        }

    }
}

?>

