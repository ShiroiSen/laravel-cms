@extends('layouts.main')

@section('container')
<div class="grid grid-cols-4 gap-5 rounded-lg m-10">
    @foreach ($posts as $post)
    <article class="p-6 rounded-lg border shadow-lg max-h-48 ">
        <h2>
            <a href="/dashboard/{{ $post["slug"] }}" class="text-xl font-bold mb-2">{{ $post["title"] }}</a>
        </h1>
        <h5 class="text-base text-gray-600 mb-2">{{ $post["author"] }}</h5>
        <p class="text-sm text-gray-700 line-clamp-3">{{ $post["body"] }}</p>
    </article>
    @endforeach
</div>
@endsection
