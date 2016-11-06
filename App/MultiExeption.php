<?php

namespace App;

class MultiExeption
    extends \Exception
    implements \Iterator
{

    use TIterator;

    public function add($item)
    {
        $this->data[] = $item;
    }

}