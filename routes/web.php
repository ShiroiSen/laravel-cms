<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Category;
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


Route::get('/dashboard', [BlogController::class, 'index']);

Route::get('/dashboard/{blog:slug}',[BlogController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Blog Categories',
        'categories' => \App\Models\Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'blogs' => $category->blogs,
        'category' => $category->name
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