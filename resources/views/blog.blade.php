@extends('layouts.detail')

@section('container')
<div class="mt-20">
    <div class="flex justify-center flex-col max-w-[80ch] mx-auto p-4">
        <div class="flex flex-col items-center relative">
            <div class="relative w-full h-[400px]">
                <div class="placeholder-animation absolute inset-0 w-full h-full bg-gray-300 animate-pulse rounded-t-lg"></div>
                @if ($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" class="absolute inset-0 w-full h-full object-cover rounded-t-lg" alt="Blog Image">
                @else
                    <img src="https://source.unsplash.com/1900x650/?{{ $blog->category->name }}" class="absolute inset-0 w-full h-full object-cover rounded-t-lg" alt="Blog Image">
                @endif
            </div>  
            <h2 class="absolute bottom-0 bg-white text-center font-bold text-4xl p-4 rounded-t-lg max-w-md">
                {{ $blog->title }} <br>
                <p class="text-xl font-light">
                    By. 
                    <a href="/authors/{{ $blog->user->username }}" class="text-blue-500">{{ $blog->user->name }} 
                        <span class="text-black"> in </span> 
                        <a href="/categories/{{ $blog->category->slug }}" class="text-blue-500">{{ $blog->category->name }}</a>
                    </a>
                </p>
            </h2>
        </div>
        <br>
        <div class="p-5">{!! $blog->body !!}</div>
    </div>
</div>

@endsection