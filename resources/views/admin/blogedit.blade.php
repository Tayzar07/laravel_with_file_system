@props(['categories'])
<x-admin-layout >
    <h3 class="w-50 mx-auto text-center mt-2 text-primary">Blog Edit Form</h3>
    <form method="POST" action="/admin/blog/{{ $blog->slug }}/update" style="width: 700px"
        class="clearfix mx-auto mt-4  mb-5 border border-1 border-primary p-5 rounded-3" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputEmail1">Title</label>
            <input type="text" value="{{ old('title', $blog->title) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title"
                placeholder="Enter blog title">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputEmail1">Slug</label>
            <input type="text" value="{{ old('slug', $blog->slug) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="slug" placeholder="Enter blog slug">
            @error('slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputEmail1">Info</label>
            <input type="text" value="{{ old('info', $blog->info) }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="info" placeholder="Enter blog info">
            @error('info')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputPassword1">Body</label>
            <textarea name="body" id="editor" cols="30" rows="10" class="form-control">{{ old('body', $blog->body) }}</textarea>
            @error('body')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputPassword1">Thumbnail</label>
            <input type="file" class="form-control" id="exampleInputPassword1" name="thumbnail">
            @error('thumbnail')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="" class="img-preview mt-2" style="max-height: 200px;">
        </div>

        <div class="form-group mb-4">
            <label class="mb-1" for="exampleInputPassword1">Category</label>
            <select name="category_id" id="" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option  value="{{ $category->id }}" {{ $category->id == old('category_id', $blog->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary float-end">Submit</button>
    </form>
</x-admin-layout>
