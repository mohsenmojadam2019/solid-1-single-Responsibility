<?php

namespace App\Http\Controllers\Solid1;

class PostController
{
    public function store(StorePostRequest $request)
    {
         PostService::create($request);

         return response()->json(['message' => 'Post created successfully.'], 201);

    }



}
