<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

//

        return view('posts', [
            'posts' => Post::latest()->filter(request(['search','category']))->get(),
            'categories' => \App\Models\category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }


}
