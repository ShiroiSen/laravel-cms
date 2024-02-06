@extends('layouts.main')

@section('container')
<div class="flex justify-center m-5">
    <input type="text" placeholder="Search..." class="border-2 border-gray-600 bg-white h-10 px-5 pr-10 rounded-lg shadow-lg text-sm focus:outline-none">
    <button type="submit" class="absolute right-0 top-0 mt-3 mr-4"></button>
</div>
<div class="grid grid-cols-4 gap-5 rounded-lg m-10">
    @foreach ($blogs as $blog)
    <article class="p-6 rounded-lg border-2 shadow-lg max-h-48 border-gray-600">
        <h2>
            <a href="/dashboard/{{ $blog["slug"] }}" class="text-xl font-bold mb-2">{{ $blog["title"] }}</a>
        </h1>
        <h5 class="text-base text-gray-600 mb-2">{{ $blog["author"] }}</h5>
        <p class="text-sm text-gray-700 line-clamp-3">{{ $blog["body"] }}</p>
    </article>
    @endforeach
</div>
@endsection
