<?php

class Category
{
    public $category_name;
    public $icon;

    public function __construct($_category_name, $_icon)
    {
        $this->category_name = $_category_name;
        $this->icon = $_icon;
    }
}