<?php

namespace App\Model;

class Post
{
    public static function getAll(): array
    {
        $data = file_get_contents(__DIR__ . '/../../posts.json');
        return json_decode($data, true);
    }
}
