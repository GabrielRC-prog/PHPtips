<?php

namespace source\Controllers;

require_once __DIR__ . "/../../vendor/autoload.php";
require_once __DIR__ . "/Controller.php";
require_once __DIR__ . "/../Models/Product.php";

use Source\Models\Product;

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Web extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function home(array $data): void
    {
        echo $this->view->render("home", [
            "products" => (new Product())
            ->find()
            ->order(columnOrder: "name")
            ->fetch(true)
        ]);
    }

    public function order(): void 
    {
        if(!empty($_SESSION["cart"])){
            var_dump($_SESSION["cart"]);
        }else{
            var_dump(false);
        }
        echo "<a href='".$this->router->route(name: "web.home")."' title=''>Voltar</a>";
    }
}