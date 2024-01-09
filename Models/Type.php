<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Product.php';


class Type extends Product
{
    public $type_name;
    public $categories;

    public function __construct($_type_name, Category $_categories)
    {
        parent::__construct($_title, $_price);
        $this->type_name = $_type_name;
        $this->categories = $_categories;
    }
}