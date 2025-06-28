<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // DB::listen(function ($query) {
        //     Log::info($query->sql);
        // });
        return view('blogs.index', ['blogs' => Blog::latest()->filter(request(['search', 'category', 'user']))->paginate(3)->withQueryString(), 'categories' => Category::all()]);
    }

    function show($slug)
    {
        return view('blogs.show', ['blog' => Blog::without(['category', 'user'])->firstwhere('slug', $slug), 'randomBlogs' => Blog::inRandomOrder()->take(3)->get()]);
    }

    // protected function getBlogs(){
    //     return $query = Blog::latest()->filter(request(['search']))->get();
    //     // $query->when(request('search'), function ($query,$search) {
    //     //     $query->where('title', 'like', '%' . $search . '%')
    //     //         ->orWhere('body', 'like', '%' . $search . '%');
    //     // });
    //     // if (request('search')) {
    //     //     $blogs->where('title', 'like', '%' . request('search') . '%')
    //     //         ->orWhere('body', 'like', '%' . request('search') . '%');
    //     // }
    //     // return $query->get();
    // }
}
