<x-layout>
    {{-- @dd(auth()->user()->name) --}}
    <x-flash-msg :name="'success'" />
    <!-- hero section -->
    <x-hero />
    <!-- blogs section -->
    <x-blog-section :blogs="$blogs" :categories="$categories" :currentCategory="$currentCategory??null" />
</x-layout>
