<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);


require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/source/Config.php";
require __DIR__ . "/source/Controllers/Controller.php";
require __DIR__ . "/source/Controllers/Web.php";


$router = new \CoffeeCode\Router\Router(ROOT);
$router->namespace(namespace:"Source\Controllers");

//web

$router->group(null);
$router->get("/", "Web:home", "web.home");
$router->get("/carrinho","Web:order", "web.order");

//Cart

$router->group(group:"/cart");
$router->post("/", "WebCart:cart", "cart.cart");
$router->post("/add/{id}", "WebCart:add", "cart.add");
$router->post("/remove/{id}", "WebCart:remove", "cart.remove");
$router->post("/clear", "WebCart:clear", "cart.clear");

//process

$router->dispatch();
if ($error = $router->error()) {
    var_dump($error);
}