<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.blogcreate', [
            'categories' => Category::all()
        ]);
    }

    public function store()
    {
        $formdata = request()->validate([
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3', 'unique:blogs,slug'],
            'info' => ['required', 'min:3'],
            'body' => ['required', 'min:10'],
            'category_id' => ['required', 'exists:categories,id']
        ]);

        $formdata['user_id'] = auth()->id();
        Blog::create($formdata);

        return redirect('/')->with('success', 'Blog created successfully');
    }
}
