<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashBlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('landingPage',[
        'title' => 'Landing Page'
    ]);
})->name('landingPage');;

Route::get('/dashboard', function () {
    return view('dashboard.general', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::get('/dashboard/blogs/checkSlug', [DashBlogController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/blogs', DashBlogController::class)->middleware('auth');

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
})->middleware('auth');

Route::get('/authors/{user:username}', function(User $user){
    return view('author', [
        'title' => $user->name,
        'blogs' => $user->blogs->load(['user', 'category'])
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'blogs' => $category->blogs->load(['user', 'category']),
        'category' => $category->name
    ]);
});

Route::get('/blogs', [BlogController::class, 'index'])->middleware('auth');

Route::get('/blogs/{blog:slug}',[BlogController::class, 'show'])->middleware('auth');

Route::get('/mail', function () {
    return view('mail', [
        "title" => "Your Blog",
        "blogs" => Blog::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);