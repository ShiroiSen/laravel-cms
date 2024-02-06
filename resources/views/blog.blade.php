@extends('layouts.main')

@section('container')
<div class="p-6 rounded-lg border shadow-lg m-10 border-gray-900">
    <h2>{{ $blog["title"] }}</h2>
    <h5>{{ $blog["author"] }}</h5>
    <p>{{ $blog["body"] }}</p>
</div>
<a href="/dashboard" class="bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-700 transition duration-300 ease-in-out m-10">Back</a>
@endsection