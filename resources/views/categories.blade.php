@extends('layouts.main')

@section('container')
<div id="myText2" class="mt-20 opacity-0 transition-opaycit duration-1000">
    <div>
        <h1 class="flex items-center justify-center p-4 font-semibold text-2xl">now you are in Categories page</h1>
    </div>
    <div class="flex flex-wrap justify-center gap-5 p-5 ">
        @foreach ($categories as $category)
        <a href="/categories/{{ $category->name }}" class="flex flex-col items-center relative rounded-lg overflow-hidden">
            <div class="min-w-96 min-h-96 bg-gray-200 rounded-lg ">
                <div class="absolute inset-0 bg-gray-400 animate-pulse"></div>
                <img src="https://source.unsplash.com/400x300/?{{ $category->name }}" class="absolute inset-0 w-full h-full object-cover rounded-lg brightness-75" alt="Category Image">
            </div>
            <h2 class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-black text-white bg-opacity-75 text-center font-bold text-4xl p-4 rounded-lg color-white">
                {{ $category->name }}
            </h2>
        </a>
        
        @endforeach
    </div>
</div>
<script>
    setTimeout(function() {
        document.getElementById("myText2").classList.add("opacity-100");
    }, 150);
</script>
@endsection