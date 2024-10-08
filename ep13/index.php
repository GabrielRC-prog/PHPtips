<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/source/Config.php";
require __DIR__ . "/source/controllers/Form.php";
require __DIR__  . "/source/models/User.php";

$router = new Router(ROOT);
$router->namespace("Source\Controllers");

$router->group(null);
$router->get(route:"/", handler: "Form:home", name: "form.home");
$router->post(route:"/create", handler:"Form:create", name: "form.create");
$router->post(route:"/delete", handler:"Form:delete", name: "form.delete");

$router->dispatch();

if($router->error()){
    var_dump($router->error());
}
