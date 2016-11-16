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
            throw new \Exception('Данные для подключения к БД неверны');
        }
    }

    public function execute(string $sql, array $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {
            throw new \Exception('Ошибка запроса к БД');
        }
        return true;
    }

    public function query(string $sql, array $data = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {
            throw new \Exception('Ошибка запроса к БД');
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
            throw new \Exception('Ошибка запроса к БД');
        }
        if (null === $class) {

            while ($row = $sth->fetch()) {
                yield $row;
            }

        } else {

            while ($row = $sth->fetch(\PDO::FETCH_CLASS | \PDO::FETCH_CLASSTYPE)){
                yield $row;
            }
        }
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}

?>


