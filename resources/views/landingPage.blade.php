@extends('layouts.landingNav')

@section('container')

<div class="font-sans antialiased flex flex-col pt-12">
    <section class="py-20 flex-grow">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-4">Welcome to Blog<span class="text-blue-700 hover:text-red-700">ID</span>&nbsp;Landing Page</h2>
            <p class="text-lg text-gray-700 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="/login" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded">Get Started</a>
        </div>
    </section>

    <section class="py-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="border-fray-900 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-4">Feature 1</h3>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="border-fray-900 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-4">Feature 2</h3>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="border-md b-gray-900 rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-4">Feature 3</h3>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>
</div>




@endsection