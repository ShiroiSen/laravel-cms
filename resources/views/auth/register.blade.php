@extends('layouts.auth')

@section('container')
    <section class="bg-gray-900">
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
                    <h1 class="text-2xl font-bold leading-tight tracking-tight text-white">
                        Create and account
                    </h1>
                    <form action="/register" method="post" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                            <input type="text" name="name" id="name" placeholder="John Doe" class="rounded-lg block w-full p-2.5 bg-gray-700 border border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-red-500 text-sm mt-1">
                                    {{  $message }}
                                </div>
                            @enderror
                        </div>                        
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-white">username</label>
                            <input type="text" name="username" id="username" placeholder="John Destroyer" class="rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                            @error('username')
                                <div class="text-red-500 text-sm mt-1">
                                    {{  $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                            <input type="email" name="email" id="email" placeholder="name@company.com" class="rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-red-500 text-sm mt-1">
                                    {{  $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror" value="{{ old('password') }}">
                            @error('password')
                                <div class="text-red-500 text-sm mt-1">
                                    {{  $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-primary-600 hover:bg-primary-700 focus:ring-primary-800 mt-2">Create an account</button>
                        <p class="text-sm font-light text-gray-400">
                            Already have an account? <a href="/login" class="font-medium hover:underline text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection