@extends('layouts.main')

@section('container')
<div id="blogRender" class="opacity-0 transition-opaycit duration-1000">
    <div>
        <h1 class="flex items-center justify-center p-4 font-semibold text-2xl">now you are in Dashboard page</h1>
    </div>
    
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3 2xl rounded-lg px-5 sm:px-16 md:px-36 xl:px-44 ">
        @foreach ($blogs as $blog)
        <div class="flex flex-col rounded-lg border border-gray-400 ">
            <div class=" flex justify-center align-middle">
                <div>ini image</div>
            </div>
            <div class="p-3">
                <div>
                    <a href="/dashboard/{{ $blog->slug }}" class="text-xl font-bold mb-2">{{ $blog->title }}</a>
                    <br>
                    <p>By. <a href="/authors/{{ $blog->user->username }}" class="text-blue-500">{{ $blog->user->name }} <span class="text-black"> in </span> <a href="/categories/{{ $blog->category->slug }}" class="text-blue-500">{{ $blog->category->name }}</a></a></p>
                </div>
                <br>
                <div class="text-sm text-gray-700 line-clamp-3">{!! $blog->body !!}</div>
                <a href="/dashboard/{{ $blog->slug }}" class="text-blue-500">Read More..</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    setTimeout(function() {
        document.getElementById("blogRender").classList.add("opacity-100");
    }, 150);
</script>
@endsection
