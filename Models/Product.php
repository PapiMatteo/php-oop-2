<?php

// require_once __DIR__ . '/Category.php';
// require_once __DIR__ . '/Type.php';

class Product
{
    public $image;
    public $title;
    public $price;   

    public function __construct($_image, $_title, $_price)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
    }

}