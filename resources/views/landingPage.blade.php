@extends('layouts.landingNav')

@section('container')

<div class="font-sans antialiased flex flex-col align-middle pt-36 bg-gray-900 h-screen">
    <section class="py-20 ">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-semibold mb-4 text-white">Welcome to Blog<span class="text-blue-700 hover:text-red-700">ID</span>&nbsp;Landing Page</h2>
            <p class="text-lg mb-8 text-white ">create your own blog and participate with all bloggers on the same planet <br>join and register now</p>
            <a href="/register" class="bg-blue-500  shadow-lg shadow-blue-700 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded">Get Started</a>
            
        </div>
    </section>

    <section class="py-16">
        <div class="flex flex-wrap justify-center align-middle mx-auto gap-8 ">
            <div class="rounded-lg border max-w-md border-blue-600 p-6 shadow-lg shadow-blue-700 ">
                <h3 class="text-xl font-semibold mb-4 text-white">Friendly Content</h3>
                <p class="text-white">"All content within this website has been filtered by the admin by applying freedom of speech, but not with hate speech and other bad things."</p>
            </div>
            <div class="rounded-lg border max-w-md border-blue-600 p-6 shadow-lg shadow-blue-700">
                <h3 class="text-xl font-semibold mb-4 text-white">Simple UI</h3>
                <p class="text-white">
                    "Inside this website, there is a simple UI that everyone can adapt to quickly and won't be confused even when joining the community for the first time."</p>
            </div>
            <div class="rounded-lg border max-w-md border-blue-600 p-6 shadow-lg shadow-blue-700">
                <h3 class="text-xl font-semibold mb-4 text-white">Rich Text Editor</h3>
                <p class="text-white">"Inside this website, there is a simple UI that everyone can adapt to quickly and won't be confused even when joining the community for the first time."</p>
            </div>
        </div>
    </section>
    <section class="flex justify-center fixed bottom-0 w-full bg-gray-900 p-6">
        <p class="text-white"><span class="hover:text-red-700">Copyright &#169;  2023</span>, Project UKK Ubaidillah</p>
    </section>
    
</div>




@endsection