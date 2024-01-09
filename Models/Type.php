<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Product.php';


class Type extends Product
{
    public $name;
    public $categories;

    public function __construct($_name, Category $_categories)
    {
        parent::__construct($_title, $_price);
        $this->name = $_name;
        $this->categories = $_categories;
    }
}