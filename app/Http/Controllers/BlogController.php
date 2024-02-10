<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            "title" => "Dashboard",
            "blogs" => \App\Models\Blog::all()
        ]);
    }
    
    public function show(\App\Models\Blog $blog)
    {
        return view('blog ', [
            "title" => "$blog->title",
            "blog" => $blog
        ]);
    }
}
