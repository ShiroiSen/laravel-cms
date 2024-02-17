@extends('layouts.detail')

@section('container')
<div id="blogRender" class="opacity-0 transition-opaycity duration-1000">
    <div>
        <p class="flex items-center justify-center p-4 font-semibold text-2xl">now you are in&nbsp;<span class="text-blue-500"> {{ $title }}</span>'s Blog page</p>
    </div>
    <div class="flex flex-col justify-center items-center ">
        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3 2xl px-5 sm:px-16 md:px-36 xl:px-44 ">
            @foreach ($blogs as $blog)
            <div class="flex flex-col rounded-lg border border-gray-400">
                <div class=" flex justify-center align-middle">
                    <div>ini image</div>
                </div>
                <div class="p-3">
                    <div>
                        <a href="/dashboard/{{ $blog->slug }}" class="text-xl font-bold mb-2">{{ $blog->title }}</a>
                        <br>
                        <p>By. <a href="" class="text-blue-500">{{ $blog->user->name }} <span class="text-black"> in </span> <a href="/categories/{{ $blog->category->slug }}" class="text-blue-500">{{ $blog->category->name }}</a></a></p>
                    </div>
                    <br>
                    <div class="text-sm text-gray-700 line-clamp-3">{!! $blog->body !!}</div>
                    <a href="/dashboard/{{ $blog->slug }}" class="text-blue-500">Read More..</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        document.getElementById("blogRender").classList.add("opacity-100");
    }, 150);
</script>
@endsection
