<?php

namespace source\Facades;

use Source\Models\Product;
use source\Facades;

class cart
{
    public function __construct()
    {
        if (!session_id()){
            session_start();
        }

        $_SESSION["cart"] = (!empty($_SESSION["cart"]) ? $_SESSION["cart"] : []);
    
    }

    public function cart(): ?array
    {
        return $_SESSION["cart"];
    }

    public function add(Product $product) 
    {
        echo json_encode(["pdt" => $product]); 
    }

    public function remove(Product $product)
    {

    }

    public function clear()
    {

    }

}