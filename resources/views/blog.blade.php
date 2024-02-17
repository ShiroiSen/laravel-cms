@extends('layouts.detail')

@section('container')
<div class="p-5">
    <div class="p-6 rounded-lg border border-gray-400"">
        <h2 class="font-bold text-center text-4xl">{{ $blog->title }}</h2>
        {{-- <h5 class="text-center text-2xl">{{ $blog->author }}</h5> --}}
        <div class=" flex justify-center">
            <p>By. <a href="/authors/{{ $blog->user->username }}" class="text-blue-500">{{ $blog->user->name }} <span class="text-black"> in </span> <a href="/categories/{{ $blog->category->slug }}" class="text-blue-500">{{ $blog->category->name }}</a></a></p>
        </div>
        <br>
        {!! $blog->body !!}
    </div>
    <button class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out mt-5">Comment</button>
</div>

@endsection