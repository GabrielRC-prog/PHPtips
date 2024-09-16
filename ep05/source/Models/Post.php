<?php

namespace source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Post extends DataLayer
{
    public function __construct()
    {
        parent::__construct("posts", ["title", "description"]);
    }
} 

