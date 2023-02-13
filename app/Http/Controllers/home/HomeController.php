<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class HomeController extends Controller
{
    public function masterHome(Request $request)
    {
        $currPage = "home";
        return view('home.home',compact('currPage'));
    }
    public function generateLandingPage(Request $request)
    {
        // Landing Page Ajax
        return view("home.partial.landing");
    }
    public function generateConfessionPage(Request $request)
    {
        // Confession Page Ajax
        return view("home.partial.confession");
    }
    public function postConfession(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'recipient' => 'required',
            'content' => 'required'
        ]);
        $user = User::where('username',$request->username)->first();
        if($user == null){
            $user = new User();
            $user->username = $request->username;
            $user->save();
            $user = User::where('username',$request->username)->first();
        }
        $post = new Post();
        $post->recipient = $request->recipient;
        $post->content = $request->content;
        $post->postcard = rand(1,10);
        $post->user_id = $user->id;
        if($request->input('anonymus')=="on"){
            $post->anonymus = 1;
        }else{
            $post->anonymus = 0;
        }
        $post->save();
        return redirect()->route("home")->with("successMessage","Your confession is posted ;)");
    }
}
