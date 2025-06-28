<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/',[BlogController::class, 'index']);

Route::get('/blogs/{slug}', [BlogController::class, 'show']);

Route::get('/register',[AuthController::class, 'create']);

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('blogs', ['blogs' => $category->blogs, 'categories' => Category::all(),'currentCategory' => $category]);
// });

// Route::get('/users/{user:username}', function (User $user) {
//     return view('blogs', ['blogs' => $user->blogs,'categories' => Category::all()]);
// });
