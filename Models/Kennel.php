<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product 
{
    protected $usage;
    protected $name;

    public function set_usage($_usage)
    {
        $this->usage = $_usage;
    }

    public function get_usage()
    {
        return $this->usage;
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