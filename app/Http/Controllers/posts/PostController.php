<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function masterPosts(Request $request)
    {
        $currPage = "posts";
        $posts = Post::all();
        return view('posts.posts',compact('currPage','posts'));
    }
}
