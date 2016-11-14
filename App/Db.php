<?php

namespace App;

class Db

{

    protected $dbh;

    public function __construct()
    {

        $config = Config::getInstance();
        $cfg = $config->cfg;

        $dsn = 'mysql:dbname=' . $cfg->db->dbname . ';host=' . $cfg->db->host . ';charset=' . $cfg->db->charset;

        try {

            $this->dbh = new \PDO($dsn, $cfg->db->user, $cfg->db->passw);

        } catch (\Exception $e) {

            throw new \Exception('Ошибка соед. с базой данных');

        }

    }


    public function execute(string $sql, array $data = [])
    {

        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {

            throw new \Exception('Ошибка подключения к БД');

        }

        return true;

    }


    public function query(string $sql, array $data = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {

            throw new \Exception('Ошибка подключения к БД');

        }

        if (null === $class) {

            return $sth->fetchAll();

        } else {

            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

        }
    }


    public function queryEach(string $sql, array $data = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {

            throw new \Exception('Ошибка подключения к БД');

        }

        if (null === $class) {

            return $sth->fetch();

        } else {

            return $sth->fetch(\PDO::FETCH_CLASS, $class);

        }
    }


    public function lastInsertId()
    {

        return $this->dbh->lastInsertId();

    }
}

?>


