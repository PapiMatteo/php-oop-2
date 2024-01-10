<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product 
{
    protected $material;
    protected $name;

    public function set_material($_material)
    {
        $this->material = $_material;
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