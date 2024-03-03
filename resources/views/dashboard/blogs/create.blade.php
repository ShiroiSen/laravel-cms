@extends('dashboard.layouts.dashMain')

@section('container')
<div class="max-w-screen-2xl mx-auto mt-12">
    <div class="flex flex-row mb-9 gap-5">
        <p class="text-4xl">Create Blogs</p>
    </div>
    <form method="POST" action="/dashboard/blogs" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium">Title</label>
            <input type="text" id="title" name="title" class="text-sm rounded-lg block w-full border border-black p-2.5 @error('title') border-red-500 @enderror" value="{{ old('title') }}">
            @error('title')
            <div class="text-red-500 text-sm mt-1">
                {{  $message }}
            </div>
            @enderror
        </div> 
        <div class="mb-6">
            <label for="slug" class="block mb-2 text-sm font-medium">Slug</label>
            <input type="text" id="slug" name="slug" class="text-sm text-gray-600 rounded-lg block w-full border border-black p-2.5 placeholder:text-gray-600 @error('slug') border-red-500 @enderror" placeholder="Slug Auto Regenerate" value="{{ old('slug') }}">
            @error('slug')
            <div class="text-red-500 text-sm mt-1">
                {{  $message }}
            </div>
            @enderror
        </div> 
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium">Category</label>
            <select name="category_id" class="text-sm rounded-lg block w-full p-2.5 border border-gray-600">
                @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
            <div class="text-red-500 text-sm mt-1">
                {{  $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium" for="image">Blog Image</label>
            <input class="p-2.5 block w-full text-sm border rounded-lg cursor-pointer text-gray-400 focus:outline-none border-gray-600 placeholder-gray-400 @error('image') border-red-500 @enderror" id="image" name="image" type="file">
            @error('image')
            <div class="text-red-500 text-sm mt-1">
                {{  $message }}
            </div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="body" class="block mb-2 text-sm font-medium">Body</label>
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
            <div class="text-red-500 text-sm mt-1">
                {{  $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Create</button>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/blogs/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });
</script>
@endsection