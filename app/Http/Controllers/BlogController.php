<?php

namespace App\Http\Controllers;

use App\Mail\subscriberMail;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    public function index()
    {
        // DB::listen(function ($query) {
        //     Log::info($query->sql);
        // });
        return view('blogs.index', ['blogs' => Blog::latest()->filter(request(['search', 'category', 'user']))->paginate(3)->withQueryString(), 'categories' => Category::all()]);
    }

    function show(Blog $blog)
    {
        return view('blogs.show', ['blog' => $blog, 'randomBlogs' => Blog::inRandomOrder()->take(3)->get(),'comments' => $blog->comments()->latest()->paginate(2)]);
    }

    public function storeComment(Blog $blog){
        $formdata = request()->validate([
            'body' => 'required|min:3|max:1000'
        ]);
        $formdata['user_id'] = auth()->id();
        $blog->comments()->create($formdata);
        $subscribers = $blog->subscribers->filter(fn($subscriber) => $subscriber->id !== auth()->id());
        $subscribers->each(function ($subscriber) use ($blog) {
            Mail::to($subscriber->email)->queue(new subscriberMail($blog));
        });
        return redirect("/blogs/{$blog->slug}");
    }

    public function subscribeHandler(Blog $blog)
    {
        if (auth()->user()->isSubscribe($blog)) {
            $blog->unsubscribe();
        } else {
            $blog->subscribe();
        }
        return back();
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
