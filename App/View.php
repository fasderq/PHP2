<?php



namespace App;
//    require __DIR__ . '/../vendor/autoload.php';

//require_once __DIR__ . '/Sig.php';

class View

    implements \Countable

{

    use Sig;

    protected $twig;

    public function __construct()
    {

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

        return $this->twig->render($template, $this->data);

    }

    public function count()
    {

        return count($this->data);

    }

}

