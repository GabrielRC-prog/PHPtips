<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Product extends DataLayer
{
    public function __construct()
    {
        parent::__construct("products", ["id", "name", "price"]);
    } 
}