<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product 
{
    protected $usage;

    public function set_usage($_usage)
    {
        $this->usage = $_usage;
    }

    public function get_usage()
    {
        return $this->usage;
    }
}