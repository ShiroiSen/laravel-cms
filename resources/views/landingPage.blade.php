@extends('layouts.landingNav')

@section('container')

<div class="font-sans antialiased flex flex-col align-middle pt-12 bg-gray-900 h-screen">
    <section class="py-20 ">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-4 text-white">Welcome to Blog<span class="text-blue-700 hover:text-red-700">ID</span>&nbsp;Landing Page</h2>
            <p class="text-lg mb-8 text-white">create your own blog and participate with all bloggers on the same planet <br>join and register now</p>
            <a href="/register" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded">Get Started</a>
            
        </div>
    </section>

    <section class="py-16">
        <div class="flex flex-wrap justify-center align-middle mx-auto gap-8">
            <div class="rounded-lg border max-w-md p-6">
                <h3 class="text-xl font-semibold mb-4 text-white">Feature 1</h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="rounded-lg border max-w-md p-6">
                <h3 class="text-xl font-semibold mb-4 text-white">Feature 2</h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="rounded-lg border max-w-md p-6">
                <h3 class="text-xl font-semibold mb-4 text-white">Feature 3</h3>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>
    <section class="flex justify-center fixed bottom-0 w-full bg-gray-900 p-6">
        <p class="text-white"><span class="hover:text-red-700">Copyright &#169;  2023</span>, Project UKK Ubaidillah</p>
    </section>
    
</div>




@endsection