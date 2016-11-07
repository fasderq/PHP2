<?php

namespace App;

class AdminDataTable
{
    public $models = [];
    public $functions = [];
    public $twig;

    use Sig;

    public function __construct(array $models = [], array $functions = [])
    {
        $this->models = $models;
        $this->functions = $functions;
        $this->twig = new \Twig_Environment(
            new \Twig_Loader_Filesystem([__DIR__ . '/../View'])
        );
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function render($template)
    {
        $data = [];

        foreach ($this->models as $model) {
            $columns = [];

            foreach ($this->functions as $key => $function) {
                $columns[$key] = $function($model);
            }

            $data[] = $columns;

        }

        $this->data = $data;

        return $this->twig->render($template, $this->data);

    }

}

?>