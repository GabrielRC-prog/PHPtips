<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name"]);
    }

    public function save(): bool
    {
        return  parent::save();
    }

    public function addresses()
{
    $userId = $this->id;
    var_dump($userId); // Adicione este log para verificar o ID do usuário
    return (new Address())->find("user_id = :user_id", "user_id={$userId}")->fetch(true);
}

}