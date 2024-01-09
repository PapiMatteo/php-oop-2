<?php

require_once __DIR__ . '/Product.php';


class Food extends Product
{
    protected $expire;

    public function set_expire($_expire)
    {
        $this->expire = $_espire;
    }

    public function get_expire()
    {
        return $this->expire;
    }
}