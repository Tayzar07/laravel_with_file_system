@props(['comments'])

{{-- This component is used to display comments on a blog post --}}
{{-- It expects a collection of comments as a prop --}}
{{-- Each comment will be displayed using the x-single-comment component --}}
<section class="container">
    <div class="col-md-8 mx-auto">
        <h5 class="my-3  text-secondary">Comments ({{ $comments->count() }})</h5>
        @foreach ($comments as $comment)
            <x-single-comment :comment="$comment" />
        @endforeach
    </div>
</section>
