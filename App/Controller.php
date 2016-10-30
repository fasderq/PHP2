<?php

namespace App;

abstract class Controller

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

        $this->action = 'action' . ucfirst($action) ;
        $actionName = $this->action;

        if ($this->access()) {

           return $this->$actionName();


        } else {

            echo 'доступ закрыт';
            die;

        }
    }

}

?>