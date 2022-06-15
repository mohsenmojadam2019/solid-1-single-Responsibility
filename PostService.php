<?php

namespace App\Http\Controllers\Solid1;

use App\Models\Post;

class PostService
{
    public static function create($request)
    {
        Post::create($request->validated());
    }

}
