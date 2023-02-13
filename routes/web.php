<?php

use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\posts\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return redirect()->route("home"); });

Route::prefix('/home')->group(function () {
    Route::get('/', [HomeController::class,"masterHome"])->name("home");
    Route::get('/generateLandingPage', [HomeController::class,"generateLandingPage"]);
    Route::get('/generateConfessionPage', [HomeController::class,"generateConfessionPage"]);
    Route::post('/postConfession', [HomeController::class,"postConfession"])->name("postConfession");
});

Route::prefix('/posts')->group(function () {
    Route::get('/', [PostController::class,"masterPosts"])->name("posts");
    Route::get('/generatePostlist', [PostController::class,"generatePostlist"]);
});
