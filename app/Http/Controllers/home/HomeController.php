<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        return redirect()->route("home")->with("successMessage","Your confession is posted ;)");
    }
}
