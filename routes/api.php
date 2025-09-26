<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/test-api', function () {

$posts =  Post::all();
    return response()->json(['posts' => $posts], 200);
});
