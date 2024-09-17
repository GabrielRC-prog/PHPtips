<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/source/Models/Post.php";
require __DIR__ . "/source/Config.php";

use CoffeeCode\Paginator\Paginator;
use Source\Models\Post;


$post = new Post();
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);


$paginator = new Paginator("http://localhost:8080/testesvscode/phptips/ep05/?page=");
$paginator->pager($post->find()->count(), 3, $page, 2);

$posts = $post->find()->limit($paginator->limit())->offset($paginator->offset())->fetch(true);

echo"<link rel='stylesheet' href='style.css'/>";
echo "<p> Página {$paginator->page()} de {$paginator->pages()}</p>";

if ($posts) {
    foreach ($posts as $post) {
        echo "<article class='post'><img src='{$post->cover}'/><div><h1>{$post->title}</h1><div>{$post->description}</div></div></article>";
    }
}


echo $paginator->render();
