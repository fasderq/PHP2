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

    public function access()
    {

        return method_exists(static::class, $this->action);

    }

    public function action($action)
    {

        if ($this->access()) {

            $obj = static::class;

            $ctrl = new $obj;
            $ctrl->action = $action;
            $html = $ctrl->$action();

            return $html;

        } else {

            $message = 'Доступ закрыт';

            return $message;

        }
    }

}

?>