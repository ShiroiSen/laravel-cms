<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="flex items-center justify-around bg-gray-900 p-4 font-semibold fixed top-0 left-0 right-0 z-[1000]">
        <!-- Bagian kiri -->
        <div class="flex items-center">
            <a href="/dashboard">
                <p class="text-white text-lg">
                    Blog<span class="text-blue-700 hover:text-red-700">ID</span>
                </p>
            </a>    
        </div>
    
        <!-- Bagian tengah -->
        <div class="flex items-center ">
            <a href="/dashboard" class="text-white hover:text-blue-700 py-2 px-3 {{ ($title === "Dashboard") ? '!text-blue-700' : '' }}">Dashboard</a>
            <a href="/categories" class="text-white hover:text-blue-700 py-2 px-3 {{ ($title === "Categories") ? '!text-blue-700' : '' }}">Categories</a>
            <a href="/blogs" class="text-white hover:text-blue-700 py-2 px-3 {{ ($title === "Blogs") ? '!text-blue-700' : '' }}">Blogs</a>
        </div>
    
        <!-- Bagian kanan -->
        <div class="flex items-center space-x-4">
            <div class="relative">
                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Menu<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
            
                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-10 hidden bg-black bg-opacity-75 divide-y divide-gray-800 rounded-lg w-36 absolute top-full -right-6 mt-2">
                    <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li class="flex flex-row hover:text-green-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <a href="#" class="block px-4 py-2 ">Profile</a>
                        </li>
                        <li class="flex flex-row hover:text-red-500">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ml-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>                           
                            {{-- <a href="#" class="block px-4 py-2 hover:text-red-700">Sign out</a> --}}
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="block px-4 py-2">Sign out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        const dropdownButton = document.getElementById('dropdownHoverButton');
        const dropdownMenu = document.getElementById('dropdownHover');
    
        dropdownButton.addEventListener('mouseenter', () => {
            dropdownMenu.classList.remove('hidden');
        });
    
        dropdownMenu.addEventListener('mouseleave', () => {
            dropdownMenu.classList.add('hidden');
        });
    </script>
</body>
</html>