<?php

require_once __DIR__ . '/Product.php';


class Food extends Product
{
    protected $expire;
    protected $name;

    public function set_expire($_expire)
    {
        $this->expire = $_espire;
    }

    public function get_expire()
    {
        return $this->expire;
    }

    public function set_name($_name)
    {
        $this->name = $_name;
    }

    public function get_name() 
    {
        return $this->name;
    }
}