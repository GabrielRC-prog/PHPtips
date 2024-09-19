<?php
namespace Source\Controllers;

error_reporting(E_ALL);
ini_set('display_errors', 1);

use League\Plates\Engine;
use COffeeCode\Router\Router;

abstract class Controller
{
    protected $view;

    protected $router;

    public function __construct($router, $dir = null, $globals = [])
    {
        $dir = $dir ?? dirname(__DIR__, levels: 2). "/theme/"; 
        $this->view = new Engine($dir,"php");
        $this->router = $router;

        $this->view->addData(["router" => $this->router]);
        if($globals){
            $this->view->addData($globals);
        }
    }

    public function ajaxMessage(string $message, string $type): string
    {
        return json_encode(["message" => "<div class=\"message {$type}\">{$message}</div>"]);
    }
}