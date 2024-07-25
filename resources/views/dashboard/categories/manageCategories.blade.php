@extends('dashboard.layouts.dashMain')

@section('container')
<div class="max-w-screen-2xl mx-auto mt-12">
    <div class=" flex flex-row mb-9 gap-5">
        <p class="text-4xl">Category List</p>
        <button id="create-category-btn" class="hover:text-blue-700 text-lg border border-black p-2 rounded-lg inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>              
            <span class="align-middle inline-block text-sm">Create New Categories</span>
        </button>
    </div>
    <div>
        @foreach ($categories as $category)
            <div class="rounded-full border px-6 py-4 m-6">{{ $category->name }}</div>
        @endforeach
    </div>
</div>

@endsection

