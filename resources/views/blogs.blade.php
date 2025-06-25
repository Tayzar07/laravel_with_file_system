<x-layout>
    <x-slot name="title">
        <title>Home Page</title>
    </x-slot>
    <header>
        <h1>Blogs</h1>
    </header>

    @foreach ($blogs as $blog)
        <article>
            <h2 class="blogtitle"><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h2>
            <p>written by <a href="/users/{{$blog->user->username}}"><strong>{{$blog->user->name}}</strong></a></p>
            <p>published at - {{$blog->created_at->diffForHumans()}}</p>
            <p><a href="/categories/{{$blog->category->slug}}">{{$blog->category->name}}</a></p>
            <p><strong>Intro:</strong>{{$blog->info}}</p>
        </article>
        <hr>
    @endforeach

</x-layout>
