<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/show', function () { 
$posts =  Post::all();
    return response()->json(['posts' => $posts], 200);
});
Route::get('/create', function () { 
  $posts = Post::factory()->count(10)->create();
    return response()->json(['posts' => $posts], 200);
});
