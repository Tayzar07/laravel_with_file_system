<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // DB::listen(function ($query) {
    //     Log::info($query->sql);
    // });
    $blogs = Blog::all();
    return view('blogs', ['blogs' => $blogs]);
});

Route::get('/blogs/{slug}', function ($slug) {
    return view('blog', ['blog' => Blog::without(['category','user'])->firstwhere('slug', $slug)]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blogs', ['blogs' => $category->blogs]);
});

Route::get('/users/{user:username}', function (User $user) {
    return view('blogs', ['blogs' => $user->blogs]);
});
