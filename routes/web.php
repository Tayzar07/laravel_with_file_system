<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $blogs = Blog::all();
    return view('blogs', ['blogs' => $blogs]);
});

Route::get('/blogs/{blog}', function ($slug) {
    return view('blog', ['blog' => Blog::find($slug)]);
});
