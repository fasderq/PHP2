<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 06.11.16
 * Time: 13:14
 */

namespace App;


trait TIterator
{

    protected $data = [];

    public function current()
    {
        return current($this->data);
    }


    public function next()
    {
        next($this->data);
    }


    public function key()
    {
        return key($this->data);
    }


    public function valid()
    {
        return null !== key($this->data);
    }


    public function rewind()
    {
        reset($this->data);
    }

}