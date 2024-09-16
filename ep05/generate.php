<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/source/Models/Post.php";
require __DIR__ . "/source/Config.php";

use Faker\Provider\Image;
use Faker\Provider\Lorem;
use Source\Models\Post;

for ($i = 0; $i < 9; $i++){
    
    $post = new Post();
    $post->title = Lorem::text(maxNbChars: 80);
    $post->cover = Image::image("images", width: 300, height: 150);
    $post->description = Lorem::paragraphs(nb: 2, asText: true);
    $post->save();
    

} 