<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'blogs' => Blog::latest()->filter(request(['search']))->paginate(5)
        ]);
    }

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
            'slug' => ['required', 'min:3', Rule::unique('blogs', 'slug')],
            'info' => ['required', 'min:3'],
            'body' => ['required', 'min:10'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => ['nullable', 'image'],
        ]);

        if (request()->hasFile('thumbnail')) {
            $imagename = uniqid() . "_" . request()->file('thumbnail')->getClientOriginalName();
            $formdata['thumbnail'] = request()->file('thumbnail')->storeAs('thumbnails', $imagename, 'public');
        }

        $formdata['user_id'] = auth()->id();
        Blog::create($formdata);

        return redirect('/')->with('success', 'Blog created successfully');
    }

    public function destroy(Blog $blog){
        $blog->delete();
        return redirect('/admin')->with('success', 'Blog deleted successfully');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogedit', [
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }

    public function update(Blog $blog)
    {
        $formdata = request()->validate([
            'title' => ['required', 'min:3'],
            'slug' => ['required', 'min:3', Rule::unique('blogs', 'slug')->ignore($blog->id)],
            'info' => ['required', 'min:3'],
            'body' => ['required', 'min:10'],
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => ['nullable', 'image'],
        ]);

        if (request()->hasFile('thumbnail')) {
            $dbimage = $blog->thumbnail;
            if ($dbimage != null) {
                Storage::disk('public')->delete($dbimage);
            }
            $imagename = uniqid() . "_" . request()->file('thumbnail')->getClientOriginalName();
            $formdata['thumbnail'] = request()->file('thumbnail')->storeAs('thumbnails', $imagename, 'public');
        }

        $blog->update($formdata);

        return redirect('/admin')->with('success', 'Blog updated successfully');
    }
}
