<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('landingPage');
// });


Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard",
        "blogs" => Blog::all()
    ]);
});

Route::get('dashboard/{slug}', function ($slug) {
    
    return view('blog ', [
        "title" => "Single Post",
        "blog" => Blog::find($slug)
    ]);
});

Route::get('/tag', function () {
    return view('tag', [
        "title" => "Tag"
    ]);
});

Route::get('/yourBlog', function () {
    return view('yourBlog', [
        "title" => "Your Blog"
    ]);
});

Route::get('/mail', function () {
    return view('mail', [
        "title" => "Your Blog",
        "blogs" => Blog::all()
    ]);
});


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });