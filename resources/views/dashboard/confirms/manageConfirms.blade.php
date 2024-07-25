@extends('dashboard.layouts.dashMain')

@section('container')
    <h1 class="flex items-center justify-center font-semibold text-2xl mt-12 mb-6">
        <p>There are <span class="text-blue-700">{{ count($blogs->where('is_confirmed', 'pending')) }}</span> blogs waiting for confirmation</p>
    </h1>
    @if (session('success'))
        <div class="flex justify-center">
            <div id="alert-3" class="flex items-center p-4 mb-4 rounded-lg bg-green-200 text-green-400 lg:min-w-[1152px] lg:max-w-6xl w-screen" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 inline-flex items-center justify-center h-8 w-8 bg-green-200 text-green-400 hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>  
        </div>
    @endif
    <div class="flex flex-col items-center mt-9 gap-5 w-screen mb-9">
        @foreach ($blogs->where('is_confirmed', 'pending') as $blog)
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow lg:flex-row lg:justify-between lg:min-w-[1152px] lg:max-w-6xl hover:bg-gray-100">
                <div class="flex flex-col lg:flex-row lg:justify-between w-full">
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" class="object-cover min-w-48 min-h-48 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg " alt="Blog Image">
                    @else
                        <img src="https://source.unsplash.com/1900x650/?{{ $blog->category->name }}" class="object-cover min-w-48 min-h-48 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg bg-gray-400 animate-pulse" alt="">
                    @endif
                    <div class="flex justify-between w-full">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">{{ $blog->title }}</h5>
                            <div class="mb-3 font-normal line-clamp-3">{!! $blog->body !!}</div>
                        </div>
                        <div class="flex flex-col gap-5 justify-center p-6 items-end">
                            <form method="POST" action="/dashboard/confirms/{{ $blog->slug }}">
                                @method('PUT')
                                @csrf
                                <label for="is_confirm" class="hidden"></label>
                                <input type="text" id="is_confirm" name="is_confirm" class="hidden" value="confirmed">
                                <button type="submit" class="ms-auto rounded-full focus:ring-2 focus:ring-green-400 inline-flex items-center justify-center h-8 w-8 bg-green-200 text-green-400 hover:bg-green-700" aria-label="Update">
                                    <span class="sr-only">Update</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </button>
                            </form>
                            <form method="POST" action="/dashboard/confirms/{{ $blog->slug }}">
                                @method('PUT')
                                @csrf
                                <label for="is_confirm" class="hidden"></label>
                                <input type="text" id="is_confirm" name="is_confirm" class="hidden" value="rejected">
                                <button type="submit" class="ms-auto rounded-full focus:ring-2 focus:ring-red-400 inline-flex items-center justify-center h-8 w-8 bg-red-200 text-red-400 hover:bg-red-700" aria-label="Update">
                                    <span class="sr-only">Update</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                      </svg>                                 
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        // Menangkap tombol silang dengan id alert-3
      var closeButton = document.querySelector('#alert-3 button');
  
      // Menambahkan event listener untuk klik pada tombol silang
      closeButton.addEventListener('click', function() {
      // Mengambil elemen alert dengan id alert-3
      var alertElement = document.querySelector('#alert-3');
  
      // Menutup alert dengan menghilangkan kelas 'flex' yang menyebabkan alert ditampilkan
      alertElement.classList.remove('flex');
  
      // Menghilangkan alert dari tampilan
      alertElement.style.display = 'none';
      });
  </script>
@endsection
