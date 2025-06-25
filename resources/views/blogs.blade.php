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
            <p><strong>Intro:</strong>{{$blog->intro}}</p>
        </article>
        <hr>
    @endforeach

</x-layout>
