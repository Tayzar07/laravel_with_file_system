@props(['blogs'])
<x-admin-layout>
    <x-flash-msg :name="'success'" />
    <div class="mx-5 mt-2">
        <h3>Blog Posts</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Post ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Info</th>
                    <th scope="col">Category</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <th>{{ $blog->id }}</th>
                        <td><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></td>
                        <td>{{ $blog->info }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td class="col-3">
                            <a href="/admin/blog/{{ $blog->slug }}/edit" class="btn btn-sm btn-primary me-2">Edit</a>
                            <form action="/admin/blog/{{ $blog->slug }}/delete" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs->links() }}
    </div>
</x-admin-layout>
