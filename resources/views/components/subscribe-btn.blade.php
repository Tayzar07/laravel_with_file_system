@props(['blog'])
<section class="container">
    <div class="col-md-8 mx-auto">
        <form action="/blogs/{{ $blog->slug }}/subscribe" method="POST" class="d-flex justify-content-center align-items-center gap-3">
            @csrf
            @if (auth()->user()->isSubscribe($blog))
                <button class="btn btn-danger" type="submit">Unsubscribe</button>
            @else
                <div class="d-flex flex-column align-items-center">
                    <p class="text-secondary">to get updated email,submit this blog.</p>
                <button class="btn btn-warning" type="submit">Subscribe</button>
                </div>
            @endif
        </form>
    </div>
</section>
