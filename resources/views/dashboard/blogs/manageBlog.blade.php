@extends('dashboard.layouts.dashMain')

@section('container')
<div class="max-w-screen-2xl mx-auto mt-12">
    <div class=" flex flex-row mb-9 gap-5">
        <p class="text-4xl">My Blogs</p>
        <a href="/dashboard/blogs/create" class="hover:text-blue-700 text-lg border border-black p-2 rounded-lg inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>              
            <span class="align-middle inline-block text-sm">Create New Blog</span>
        </a>
    </div>
    @if (session('success'))
    <div id="alert-3" class="flex items-center p-4 mb-4  rounded-lg  bg-green-200 text-green-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5  rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 inline-flex items-center justify-center h-8 w-8 bg-green-200 text-green-400 hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
        </button>
      </div>
    @endif
    <div class="overflow-x-auto border border-black rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead class="text-xs uppercase border-b-4 border-blue-600 text-center">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr class="hover:bg-gray-100 border">
                    <td scope="row" class="px-6 py-4 whitespace-nowrap text-center">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $blog->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">{{ $blog->category->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center">
                        @if ($blog->is_confirmed === 'confirmed')
                            <p class="bg-green-200 text-green-600 py-1 px-2.5 rounded-full inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>                            
                                confirmed
                            </p>
                        @elseif ($blog->is_confirmed === 'rejected')
                            <p class="bg-red-200 text-red-600 py-1 px-2.5 rounded-full inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                rejected
                            </p>
                        @else
                            <p class="bg-yellow-200 text-yellow-600 py-1 px-2.5 rounded-full inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                pending
                            </p>
                        @endif                    
                    </td>                    
                    <td class="px-6 py-4 flex flex-row justify-center gap-5 ">
                        <a href="/dashboard/blogs/{{ $blog->slug }}" class="hover:text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>                                                  
                        </a>
                        <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="hover:text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </a>
                        <form action="/dashboard/blogs/{{ $blog->slug }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="hover:text-blue-700" onclick="return confirm('Are You Sure Want To Delete This Blog?')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg> 
                            </button>

                        </form>
                    </td>
                </tr>
                @endforeach
    
            </tbody>
        </table>
    </div>
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

