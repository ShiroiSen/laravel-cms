<?php

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
    $blogPosts = [
        [
            "title" => "Ayam Goreng",
            "slug" => "ayam-goreng",
            "author" => "rossi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Bakar",
            "slug" => "ayam-bakar",
            "author" => "issor",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Panggang",
            "slug" => "ayam-panggang",
            "author" => "sosri",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Betutu",
            "slug" => "ayam-betutu",
            "author" => "siros",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
    ];

    return view('dashboard', [
        "title" => "Dashboard",
        "posts" => $blogPosts
    ]);
});

Route::get('dashboard/{slug}', function ($slug) {
    $blogPosts = [
        [
            "title" => "Ayam Goreng",
            "slug" => "ayam-goreng",
            "author" => "rossi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Bakar",
            "slug" => "ayam-bakar",
            "author" => "issor",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Panggang",
            "slug" => "ayam-panggang",
            "author" => "sosri",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
        [
            "title" => "Ayam Betutu",
            "slug" => "ayam-betutu",
            "author" => "siros",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias itaque minima, maiores aperiam ut autem qui aut fugiat. Quibusdam dolore atque, harum porro, molestias eos totam eaque nisi nobis hic blanditiis repellendus ipsam mollitia sunt optio neque tenetur inventore ab sit, dicta temporibus quasi autem beatae ea? Quos consequuntur provident, quis est deleniti doloremque aspernatur labore similique expedita cumque facere nihil autem itaque. Est dolorem veniam non molestias iusto a, voluptate sit delectus praesentium temporibus nisi fugit sed odio voluptates."
        ],
    ];

    $new_post = [];

    foreach($blogPosts as $blog) {
        if($blog ["slug"] === $slug) {
            $new_post = $blog;
        }
    }
    
    return view('blog ', [
        "title" => "Single Post",
        "blog" => $new_post
    ]);
});

Route::get('/category', function () {
    return view('category', [
        "title" => "Category"
    ]);
});

Route::get('/yourBlog', function () {
    return view('yourBlog', [
        "title" => "Your Blog"
    ]);
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });