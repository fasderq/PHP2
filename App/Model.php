<?php

namespace App;

abstract class Model

{

    public static $table;
    public $id;

    public static function findLastNews(int $n)
    {

        $db = new Db();
        $data = $db->query('SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT ' . $n, [], static::class);
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

    public function insert()
    {

        $columns = [];
        $binds = [];
        $data = [];

        foreach ($this as $column => $value) {

            if ('id' == $column) {

                continue;

            }

            $columns[] = $column;
            $binds[] = ':' . $column;
            $data[':' . $column] = $value;
        }

        if ($this->isNew()) {

            $sql = '
            INSERT INTO ' . static::$table . '
            (' . implode(', ', $columns) . ')
            VALUES
            (' . implode(', ', $binds) . ')';

        }

        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();


    }

    public function update()
    {
        $properties = get_object_vars($this);
        unset($properties['id']);

        $columns = array_keys($properties);
        $places = [];
        $data = [];

        foreach ($columns as $property) {

            $places[] = ':' . $property;
            $data[':' . $property] = $properties[$property];
            $dataset[] = $property . '=:' . $property;

        }

        $data[':id'] = $this->id;

        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $dataset) . ' WHERE id=:id';

        $db = new Db();
        $db->execute($sql, $data);

    }

    public function delete()
    {

        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $data[':id'] = $this->id;
        $db = new Db();
        $db->execute($sql, $data);

    }

    public static function findByLogin($login)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE login =:login';
        $data = $db->query($sql, [':login' => $login], static::class);

        return $data[0] ?? false;
    }

}

?>

