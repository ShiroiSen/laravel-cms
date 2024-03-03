@extends('layouts.main')

@section('container')
<div id="blogRender" class="opacity-0 transition-opaycit duration-1000 over mt-20 ">
    <div>
        <h1 class="flex items-center justify-center p-4 font-semibold text-2xl">now you are in Blogs page</h1>     
        <form action='/blogs' class="max-w-md mx-auto">   
            {{-- <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label> --}}
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="input" name="searchblog" class="block w-full p-4 ps-10 text-md text-gray-900 border border-gray-300 rounded-lg bg-gray-50 bg-opacity-75" placeholder="Type Blog's Title" value="{{ request('search') }}"/>
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-black hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>
    </div>

    @if ($blogs->count())
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3 rounded-lg px-10 sm:px-10 md:px-32 xl:px-44 mt-9 ">
        @foreach ($blogs as $blog)
            <div class="flex flex-col rounded-lg border border-gray-400 ">
                <a href="/blogs/{{ $blog->slug}}" class="flex flex-col items-center relative rounded-t-lg overflow-hidden">
                    <div class="min-w-96 min-h-96">
                        <div class="absolute inset-0 bg-gray-400 animate-pulse"></div>
                        @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" class="absolute inset-0 w-full h-full object-cover rounded-t-lg" alt="Blog Image">
                        @else
                            <img src="https://source.unsplash.com/1900x650/?{{ $blog->category->name }}" class="absolute inset-0 w-full h-full object-cover rounded-t-lg" alt="Blog Image">
                        @endif
                    </div>
                    <a href="/categories/{{ $blog->category->slug }}" class=" absolute bg-black text-white bg-opacity-75 text-center font-bold text-2xl p-4 rounded-tl-lg rounded-br-lg color-white">{{ $blog->category->name }}</a>
                </a>
                <div class="p-3">
                    <div>
                        <a href="/blogs/{{ $blog->slug }}" class="text-xl font-bold mb-2">{{ $blog->title }}</a>
                        <br>
                        <p>By.
                            @if ($blog->user)
                                <a href="/authors/{{ $blog->user->username }}" class="text-blue-500">{{ $blog->user->name }}</a>
                            @else
                                Unknown User
                            @endif
                            <span class="text-black"> in </span>
                            <small>{{ $blog->created_at->diffForHumans() }}</small>
                        </p>
                    </div>
                    <br>
                    <div class="text-sm text-gray-700 line-clamp-3">{!! $blog->body !!}</div>
                    <a href="/blogs/{{ $blog->slug }}" class="text-blue-500">Read More..</a>
                </div>
            </div>
        @endforeach
    </div>
    @else
    <div class="flex justify-center items-center h-screen">
        <p class="text-2xl font-bold">No Blogs Found. :(</p>
    </div>
    @endif
    <div class="flex justify-center mt-9 ">
        {{ $blogs->Links('vendor.pagination.tailwind') }}
    </div>
</div>
<script>
    setTimeout(function() {
        document.getElementById("blogRender").classList.add("opacity-100");
    }, 150);
</script>
@endsection
