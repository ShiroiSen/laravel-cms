@extends('layouts.detail')

@section('container')
<div class="py-5 px-20">
    <div class="rounded-lg border border-gray-400">

        <div class="flex flex-col items-center relative">
            <img src="https://source.unsplash.com/1900x400/?{{ $blog->category->name }}" class="rounded-t-lg">
            <h2 class="absolute bottom-0 bg-white text-center font-bold text-4xl p-5 rounded-t-lg">{{ $blog->title }}</h2>
            
        </div>
        <div class=" flex justify-center">
            <p>By. <a href="/authors/{{ $blog->user->username }}" class="text-blue-500">{{ $blog->user->name }} <span class="text-black"> in </span> <a href="/categories/{{ $blog->category->slug }}" class="text-blue-500">{{ $blog->category->name }}</a></a></p>
        </div>
        <br>
        <div class="p-5">{!! $blog->body !!}</div>
    </div>
    <button class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out mt-5">Comment</button>
</div>

@endsection