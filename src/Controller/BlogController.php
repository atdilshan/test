<?php

namespace App\Controller;

use App\Model\Post;

class BlogController
{
    public function index()
    {
        $posts = Post::getAll();
        include __DIR__ . '/../View/blog.php';
    }
}
