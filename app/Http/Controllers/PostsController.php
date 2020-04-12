<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::getFilteredPosts();

        return response()->json($posts);
    }
}
