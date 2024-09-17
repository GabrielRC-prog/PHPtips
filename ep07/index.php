<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Sempre dar todos os requires

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/source/Config.php";
require __DIR__ . "/source/App/Web.php";
require __DIR__ . "/source/Models/User.php";

$route = new \CoffeeCode\Router\Router(projectUrl: ROOT);

$route->namespace("Source\App");

$route->group(null);
$route->get(route:"/", handler: "Web:home");
$route->get(route: "/contato", handler:"Web:contact");

$route->group(group:"ops");
$route->get(route:"/{errcode}", handler:"Web:error");

$route->dispatch();

if ($route->error()) {
    $route->redirect(route:"/ops/{$route->error()}");
}

