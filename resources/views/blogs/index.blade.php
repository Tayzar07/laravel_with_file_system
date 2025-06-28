<x-layout>
    <!-- hero section -->
    <x-hero />
    <!-- blogs section -->
    <x-blog-section :blogs="$blogs" :categories="$categories" :currentCategory="$currentCategory??null" />
    <!-- subscribe new blogs -->
    <x-subscribe-for-new-blogs />
</x-layout>
