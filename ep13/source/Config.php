<?php

define("ROOT", "http://localhost:8080/testesvscode/phptips/ep13");

define ("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3307",
    "dbname" => "ep07",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL]
]); 

function url (string $path): string
{
    if ($path){
        return ROOT . "{$path}";
    }
    return ROOT;
}

function message (string $message, string $type): string
{
    return "<div class=\"message {$type}\">{$message}</div>";
}