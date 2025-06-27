@props(['categories', 'currentCategory'])
<div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ $currentCategory ? $currentCategory->name :'Filter by Category' }}
            </button>
            <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="/">All</a></li>
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="/?category={{ $category->slug }}{{request('user')?'&user='.request('user'): ''}}
                        {{request('search')?'&search='.request('search'): ''}}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
