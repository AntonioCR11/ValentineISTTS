<?php

namespace App\Http\Controllers\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function masterPosts(Request $request)
    {
        $currPage = "posts";
        return view('posts.posts',compact('currPage'));
    }
}
