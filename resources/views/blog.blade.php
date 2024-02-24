@extends('layouts.detail')

@section('container')
<div class="py-5 px-20">
    <div class="flex justify-center flex-col max-w-[80ch] mx-auto pt-16">
        <div class="flex flex-col items-center relative">
            <div class="min-w-[688px] min-h-96 bg-gray-400 animate-pulse rounded-t-lg overflow-hidden"></div>
            <img src="https://source.unsplash.com/1900x650/?{{ $blog->category->name }}" class="absolute inset-0 w-full h-full object-cover rounded-t-lg" alt="Blog Image">
            <h2 class="absolute bottom-0 bg-white text-center font-bold text-4xl p-4 rounded-t-lg max-w-md">
                {{ $blog->title }}
                <p class="text-xl font-light">By. <a href="/authors/{{ $blog->user->username }}" class="text-blue-500">{{ $blog->user->name }} <span class="text-black"> in </span> <a href="/categories/{{ $blog->category->slug }}" class="text-blue-500">{{ $blog->category->name }}</a></a></p>
            </h2>
        </div>
        <br>
        <div class="p-5">{!! $blog->body !!}</div>
    </div>
</div>

@endsection