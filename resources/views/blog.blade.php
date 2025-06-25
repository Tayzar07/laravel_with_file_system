<x-layout>
    <x-slot name="title">
        <title>blog</title>
    </x-slot>
    <article>
        <h2 class="blogtitle">{{ $blog->title }}</h2>
        <p>{{ $blog->body }}</p>
    </article>
    <a style="font-size: 20px; margin-left:5px;" href="/">Go back</a>
</x-layout>
