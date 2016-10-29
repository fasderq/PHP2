<?php

namespace App;

abstract class Auth
{
    protected $view;

    public $action;

    public function __construct()
    {

        $this->view = new View();

    }

    public function action($action)
    {
        $this->action = $action;

        if ($this->access()) {

            return $action;

        } else {

            return false;

        }

    }

    public function access()
    {

        return method_exists(static::class, $this->action);

    }

}

?>