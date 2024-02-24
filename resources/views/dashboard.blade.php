@extends('layouts.main')

@section('container')
<div class="pt-16">


    <div class="font-sans">
        <div class=" flex">
            <!-- Sidebar -->
        <aside id="sidebar" class="bg-gray-800 text-white w-64 min-h-screen py-8">
            <div class="px-4 mb-6">
                <button id="closeButton" class="focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                      </svg> 
                </button>
            </div>
            <ul>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Orders</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Customers</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Products</a></li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Settings</a></li>
            </ul>
        </aside>
    
            <!-- Content -->
            <main class="flex-1">
                <h1 class="flex items-center justify-center p-4 font-semibold text-2xl ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                    </svg>
                    Welcome Back&nbsp;
                    <span class="text-blue-700">{{ auth()->user()->name }}</span>&nbsp;
                </h1>
                <div class="container mx-auto py-8 px-4">
                    <h2 class="text-2xl font-semibold mb-4">Welcome, User!</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Total Users</h3>
                                <p class="text-gray-700">1000</p>
                            </div>
                        </div>
    
                        <!-- Card 2 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Total Orders</h3>
                                <p class="text-gray-700">500</p>
                            </div>
                        </div>
    
                        <!-- Card 3 -->
                        <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Revenue</h3>
                                <p class="text-gray-700">$10,000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>  
</div>
<script>
    const menuButton = document.getElementById('menuButton');
    const closeButton = document.getElementById('closeButton');
    const sidebar = document.getElementById('sidebar');

    menuButton.addEventListener('click', () => {
        sidebar.classList.remove('hidden');
    });

    closeButton.addEventListener('click', () => {
        sidebar.classList.add('hidden');
    });
</script>



{{-- <script>
    setTimeout(function() {
        document.getElementById("myText2").classList.add("opacity-100");
    }, 150);
</script> --}}
@endsection