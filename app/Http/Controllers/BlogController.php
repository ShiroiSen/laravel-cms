<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            "title" => "Dashboard",
            "blogs" => Blog::with(['user' , 'category'])->latest()->get()
        ]);
    }
    
    public function show(Blog $blog)
    {
        return view('blog ', [
            "title" => "$blog->title",
            "blog" => $blog
        ]);
    }
}
