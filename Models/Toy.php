<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product 
{
    protected $material;

    public function set_material($_material)
    {
        $this->material = $_material;
    }
}