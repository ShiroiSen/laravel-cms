<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest();

        if(request('searchblog')) {
            $blogs->where('title', 'like', '%' . request('search') . '%');
        }

        return view('blogs', [
            "title" => "Blogs",
            "blogs" => $blogs->paginate(12)
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
