<?php

require_once __DIR__ . '/Category.php';
// require_once __DIR__ . '/Type.php';

class Product
{
    protected $image;
    protected $title;
    protected $price;  
    protected $categories;

    public function __construct(Category $_categories)
    {
        $this->categories = $_categories;
    }

    public function set_title($_title)
    {
        $this->title = $_title;
    }

    public function get_title()
    {
        return $this->title;
    }
    
    public function set_image($_image)
    {
        $this->image = $_image;
    }

    public function get_image()
    {
        return $this->image;
    }
    
    public function set_price($_price)
    {
        if($_price > 0) {
            $this->price = $_price;
        } 
    }

    public function get_price()
    {
        return $this->price;
    }

}