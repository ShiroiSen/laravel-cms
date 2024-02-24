@extends('layouts.auth')


@section('container')
    <section class="bg-gray-900">
        @if (session('success'))
            <div class="absolute left-0 right-0 m-auto mt-2">
                <div class="flex items-center justify-center">
                    <div id="alert" class="bg-green-200 border border-green-400 text-green-700 px-4 py-3 rounded max-w-md" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                </div>
            </div>
        @endif
        @if (session('loginError'))
            <div class="absolute left-0 right-0 m-auto mt-2">
                <div class="flex items-center justify-center">
                    <div id="alert" class="bg-red-200 border border-red-400 text-red-700 px-4 py-3 rounded max-w-md" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">{{ session('loginError') }}</span>
                    </div>
                </div>
            </div>
        @endif
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-screen lg:py-0">
            <div class="flex items-center font-semibold m-9">
                <a href="/dashboard">
                    <p class="text-white text-4xl">
                        Blog<span class="text-blue-700 hover:text-red-700">ID</span>
                    </p>
                </a>    
            </div>
            <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
                <div class="p-6 space-y-6 sm:p-8">
                    <h1 class="text-2xl font-bold leading-tight tracking-tight  text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-6" action="/login" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                            <input type="email" name="email" id="email" class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" placeholder="name@company.com" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror" value="{{ old('password') }}">
                            @error('password')
                                <div class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        

                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-primary-600 hover:bg-primary-700 focus:ring-primary-800 mt-2">Sign in</button>
                        <p class="text-sm font-light text-gray-400">
                            Don’t have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline text-primary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        var alertElement = document.getElementById('alert');

        // Setelah 5 detik, sembunyikan alert dengan animasi
        setTimeout(function() {
            alertElement.style.transition = 'all 0.5s ease'; // Atur durasi animasi dan efek
            alertElement.style.transform = 'translateY(-100%)'; // Geser alert ke atas
            setTimeout(function() {
                alertElement.style.display = 'none'; // Setelah animasi selesai, sembunyikan alert
            }, 500); // Tunggu 0.5 detik sebelum menyembunyikan alert
        }, 5000); // 5000 milidetik = 5 detik 
    </script>
@endsection