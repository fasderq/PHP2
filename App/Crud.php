<?php

namespace App;


trait Crud
{

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
        $data['id'] = $this->id;

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

}

?>