@extends('dashboard.layouts.dashMain')

@section('container')
<div class="mt-12">
    <div class="flex flex-row justify-center gap-5 mb-9">
        <a href="/dashboard/blogs" class="hover:text-blue-700 flex flex-row text-lg align-middle border border-black p-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>
            &nbsp;Back
        </a>
        <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="hover:text-blue-700 flex flex-row text-lg align-middle border border-black p-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
            </svg>
            &nbsp;Edit
        </a>
        <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST">
            @method('delete')
            @csrf
            <button class="hover:text-blue-700 flex flex-row text-lg align-middle border border-black p-2 rounded-lg" onclick="return confirm('Are You Sure Want To Delete This Blog?')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
                &nbsp;Delete
            </button>
        </form>
    </div>
    <div class="flex justify-center flex-col max-w-[80ch] mx-auto">
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
                <a href="/categories/{{ $blog->category->slug }}" class="text-xl font-light text-blue-500">{{ $blog->category->name }}</a>
            </h2>
        </div>
        <br>
        <div class="p-5">{!! $blog->body !!}</div>
    </div>
</div>

@endsection