@extends('layouts.main')

@section('container')
<div>
    <h1 id="myText2" class="flex items-center justify-center p-4 font-semibold text-2xl opacity-0 transition-opaycit duration-1000">now you are in Categories page</h1>
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