<?php

namespace OriginalName;

class Post
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function show()
    {
        printf('%s' . PHP_EOL, $this->text);
    }
}