@extends('layouts.blog-detail')

@section('container')
<div class="m-10">
    <div class="p-6 rounded-lg border shadow-lg border-gray-900">
        <h2 class="font-bold text-center text-4xl">{{ $blog["title"] }}</h2>
        <h5 class="text-center text-2xl">{{ $blog["author"] }}</h5>
        <br>
        <p>{{ $blog["body"] }}</p>
    </div>
    <a href="/dashboard" class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out mt-5 mr-5">Back</a>
    <button class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out mt-5">Comment</button>
</div>

@endsection