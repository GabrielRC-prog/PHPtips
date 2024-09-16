<?php

require __DIR__ . "/vendor/autoload.php";

use Faker\Provider\Image;
use Faker\Provider\Lorem;
use Source\Models\Post;

for($i = 0; $i < 2; $i++){ 
    $post = new Post;
    $post->title = Lorem::text(maxNbChars: 80);
    $post->cover = Image::image(dir:"images", width: 300, height: 150);
    $post->description = Lorem::paragraph(2, true);

    var_dump($post);

}