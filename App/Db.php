<?php

namespace App;

class Db

{

    protected $dbh;

    public function __construct($configfile)

    {
        $json = file_get_contents($configfile);

        $cfg = json_decode($json);

        $dsn = 'mysql:dbname=' . $cfg->db->dbname . ';host=' . $cfg->db->host . ';charset=' . $cfg->db->charset;

        $this->dbh = new \PDO($dsn, $cfg->db->user, $cfg->db->passw);

    }


    public function execute(string $sql, array $data = [])

    {

        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {

            var_dump($sth->errorInfo());
            die;

        }

        return true;

    }


    public function query(string $sql, array $data = [], $class = null)

    {

        $sth = $this->dbh->prepare($sql);
        $result = $sth->execute($data);

        if (false === $result) {

            var_dump($sth->errorInfo());
            die;

        }

        if (null === $class) {

            return $sth->fetchAll();

        } else {

            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

        }

    }
}
