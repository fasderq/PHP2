<?php


namespace App;


class AdminDataTable
{
    public $models = [];
    public $functions = [];

    public function __construct(array $models = [], array $functions = [])
    {

        $this->models = $models;
        $this->functions = $functions;

    }

}