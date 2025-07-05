@props(['blog', 'randomBlogs', 'comments'])

{{-- This is the view for a single blog post --}}
{{-- It displays the blog title, body, and an image --}}
{{-- It also includes comments and related blogs at the end of the page --}}

{{-- This is a single blog page --}}
{{-- The $blog variable is passed from the controller to this view --}}
{{-- The $randomBlogs variable is used to show related blogs at the end of the page --}}
<x-layout>
    <!-- singloe blog section -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <img src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                    class="card-img-top" alt="..." />
                <h3 class="my-3">{{ $blog->title }}</h3>
                <div class="tags my-3">
                    <a href="/?category={{ $blog->category->slug }}"><span
                            class="badge bg-primary">{{ $blog->category->name }}</span></a>
                </div>
                @auth
                    <x-subscribe-btn :blog="$blog" />
                @endauth
                <hr>
                <p class="lh-md mt-3">
                    {!! $blog->body !!}
                </p>
            </div>
        </div>
    </div>

    {{-- comment-form --}}
    <section class="container">
        <div class="col-md-8 mx-auto">
            @auth
                <x-comment-form :blog="$blog" />
            @else
                <div class="alert alert-info">
                    <p class="mb-0">Please <a href="/login" class="text-decoration-none">login</a> to add a comment.</p>
                </div>
            @endauth
        </div>
    </section>
    {{-- comments --}}
    <x-comments :comments="$comments" />

    {{-- blogs you may like section --}}
    <x-blogs-you-may-like :randomBlogs="$randomBlogs" />
</x-layout>
