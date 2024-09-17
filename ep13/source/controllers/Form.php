<?php

namespace source\controllers;

use League\Plates\Engine;
use Source\Models\User;

class Form 
{
    private $view;

    public function __construct($router)
    {
        $this->view = new Engine(dirname(__DIR__, 2) . "/theme", "php");
        $this->view->addData(["router" => $router]);
    }

    public function home(): void
    {
        $users = (new User())->find()->fetch(true);
        echo $this->view->render("home", [
            "users" => $users
        ]);
    }

    public function create(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }

    public function delete(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }
}