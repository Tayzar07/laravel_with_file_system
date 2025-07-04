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
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{ $blog->title }}</h3>
          <p class="lh-md">
            {!! $blog->body !!}
          </p>
        </div>
      </div>
    </div>

    {{-- comments --}}
    <x-comments :comments="$comments" />

    <x-subscribe-for-new-blogs/>
    {{-- blogs you may like section --}}
    <x-blogs-you-may-like :randomBlogs="$randomBlogs" />
</x-layout>
