@extends('layouts.main')

@section('container')
{{-- <div class="flex justify-center m-5">
    <input type="text" placeholder="Search..." class="border-2 border-gray-600 bg-white h-10 px-5 pr-10 rounded-lg shadow-lg text-sm focus:outline-none">
    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4"></button>
</div> --}}

<div>
    <h1 id="myText2" class="flex items-center justify-center p-4 font-semibold text-2xl opacity-0 transition-opaycit duration-1000">now you are in categories page</h1>
</div>

<div class="flex flex-wrap justify-center gap-5 rounded-lg p-5">
    @foreach ($categories as $category)
    <div class="p-3 rounded-lg border max-h-48 border-gray-400">
        <a href="/categories/{{ $category->slug }}" class="text-xl font-bold mb-2">#{{ $category->name }}</a>
    </div>
    @endforeach
</div>
<script>
    setTimeout(function() {
        document.getElementById("myText2").classList.add("opacity-100");
    }, 150);
</script>
@endsection
