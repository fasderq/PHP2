<?php

namespace App;

class Config

{

    private static $configfile;
    private static $instance;

    private function __construct()
    {
        self::$configfile = __DIR__ . '/../Config/tsconfig.json';
        $json = file_get_contents(self::$configfile);
        $this->cfg = json_decode($json);
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}

?>

