<?php

require_once("Post.php");

class Post
{
}

$posts[0] = new OriginalName\Post('hello');
$posts[1] = new OriginalName\Post('hello again');

foreach ($posts as $post) {
    $post->show();
}
