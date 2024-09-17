<?php 

require __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/estruturahtml/header.php";
require_once __DIR__ . "/estruturahtml/home.php";
require_once __DIR__ . "/estruturahtml/footeer.php";
require_once __DIR__ . "/estruturahtml/login.php";
require __DIR__ . "/Source/Config.php";

use CoffeeCode\DataLayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();

if($error){
    echo $error->getMessage();
    die();
}else{
    var_dump(true);
}