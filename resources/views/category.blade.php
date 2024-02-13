@extends('layouts.main')

@section('container')
{{-- <div class="flex justify-center m-5">
    <input type="text" placeholder="Search..." class="border-2 border-gray-600 bg-white h-10 px-5 pr-10 rounded-lg shadow-lg text-sm focus:outline-none">
    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4"></button>
</div> --}}

<div>
    <h1 id="myText2" class="flex items-center justify-center p-4 font-semibold text-2xl opacity-0 transition-opaycit duration-1000">now you are in category :<span class="text-blue-700 ml-2">{{ $category }}</span></h1>
</div>
<div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl rounded-lg p-5">
    @foreach ($blogs as $blog)
    <div class="flex flex-col rounded-lg border max-h-48 border-gray-400">
        <div class=" flex justify-center align-middle">
            <div>ini image</div>
        </div>
        <div class="p-3 ">
            <div>
                <a href="/dashboard/{{ $blog->slug }}" class="text-xl font-bold mb-2">{{ $blog->title }}</a>
                <br>
                <a href="/categories/{{ $blog->category->slug }}" class="text-xl italic">#{{ $blog->category->name }}</a>
            </div>
            <br>
            <div class="text-sm text-gray-700 line-clamp-3">{!! $blog->body !!}</div>
        </div>
    </div>
    @endforeach
</div>
<script>
    setTimeout(function() {
        document.getElementById("myText2").classList.add("opacity-100");
    }, 150);
</script>
@endsection
