@props(['blogs'])
<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
        {{-- filter by category dropdown --}}
        <x-dropdown-category />
        {{-- <select name="" id="" class="p-1 rounded-pill mx-3">
                <option value="">Filter by Tag</option>
            </select> --}}
    </div>
    <form action="" class="my-3">
        <div class="input-group mb-3">
            @if (request('user'))
                <input type="hidden" value="{{ request('user') }}" name="user" class="form-control" />
            @endif
            @if (request('category'))
                <input type="hidden" value="{{ request('category') }}" name="category" class="form-control" />
            @endif

            <input type="text" autocomplete="false" value="{{ request('search') }}" name="search"
                class="form-control" placeholder="Search Blogs..." />
            <button class="input-group-text bg-primary text-light" id="basic-addon2" type="submit">
                Search
            </button>
        </div>
    </form>
    <div class="row">

        @forelse ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <x-blog-cards :blog="$blog" />
            </div>
        @empty
            <div class="col-md-12">
                <p>No blogs found about with <span class="fw-bold">{{ request('search') }}</span></p>
            </div>
        @endforelse
    </div>
    {{$blogs->links()}}
</section>
