<?php

#ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . "/../vendor/autoload.php";

require __DIR__ . "/../vendor/coffeecode/datalayer/src/Connect.php";

require __DIR__ . "/../source/config.php";

use CoffeeCode\DataLayer\Connect; 

$conn = Connect::getInstance();
$error = Connect::getError();

if ($error) 
{
    echo $error->getMessage();
    die ();
}

$query = $conn->query("SELECT * FROM users");
var_dump($query->fetchAll());