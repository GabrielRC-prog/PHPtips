<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("addresses", ["user_id"], primary:"addr_id", timestamps: false); 
           
    }

    public function add($user, $street, $number,): Address
    {
        $this->user_id = $user->id;
        $this->street = $street;
        $this->number = $number;

        
        return $this; 
    }
}