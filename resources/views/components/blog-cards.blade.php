@props(['blog'])
    <div class="card">
        <img src="{{ $blog->thumbnail ? asset('storage/' . $blog->thumbnail) : 'https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg'}}"
            class="card-img-top" alt="..." />
        <div class="card-body">
            <h3 class="card-title">{{ $blog->title }}</h3>
            <div>
                <a class="me-2" href="/?user={{ $blog->author->username }}">{{ $blog->author->name }}</a>
                <span class="text-secondary">{{ $blog->created_at->diffForHumans() }}</span>
            </div>
            <div class="tags my-3">
                <a href="/?category={{ $blog->category->slug }}"><span
                        class="badge bg-primary">{{ $blog->category->name }}</span></a>
            </div>
            <p class="card-text">
                {{ $blog->info }}
            </p>
            <a href="/blogs/{{ $blog->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>

