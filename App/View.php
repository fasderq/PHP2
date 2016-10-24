<?php

namespace App;

require_once __DIR__ . '/Sig.php';

class View

    implements \Countable

{

    use Sig;

    protected $data = [];

    public function display($template)
    {

        echo $this->render($template);

    }

    public function render($template)
    {
        ob_start();

        foreach ($this->data as $key => $value){

            $$key = $value;

        }

        include $template;
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }

    public function count()
    {
        return count($this->data);
    }

}

