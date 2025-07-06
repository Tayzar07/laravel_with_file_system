<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/',[BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);

Route::get('/register',[AuthController::class, 'create'])->middleware('guest');
Route::post('/register',[AuthController::class, 'store'])->middleware('guest');

Route::get('/login',[AuthController::class, 'login'])->middleware('guest');
Route::post('/login',[AuthController::class, 'postLogin'])->middleware('guest');

Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth');
Route::post('/blogs/{blog:slug}/comments',[BlogController::class, 'storeComment'])->middleware('auth');
Route::post('/blogs/{blog:slug}/subscribe',[BlogController::class, 'subscribeHandler'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('admin');
Route::get('/admin/blog/create',[AdminController::class, 'create'])->middleware('admin');
Route::post('/admin/blog/store',[AdminController::class, 'store'])->middleware('admin');
Route::post('/admin/blog/{blog:slug}/delete', [AdminController::class, 'destroy'])->middleware('admin');
Route::get('/admin/blog/{blog:slug}/edit', [AdminController::class, 'edit'])->middleware('admin');
Route::post('/admin/blog/{blog:slug}/update', [AdminController::class, 'update'])->middleware('admin');








// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('blogs', ['blogs' => $category->blogs, 'categories' => Category::all(),'currentCategory' => $category]);
// });

// Route::get('/users/{user:username}', function (User $user) {
//     return view('blogs', ['blogs' => $user->blogs,'categories' => Category::all()]);
// });
