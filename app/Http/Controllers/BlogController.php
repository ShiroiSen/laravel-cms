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
            $blogs->where('title', 'like', '%' . request('searchblog') . '%');
        }
        
        return view('blogs', [
            "title" => "Blogs",
            "blogs" => $blogs->where('is_confirmed', 'confirmed')->paginate(12)
        ]);        
    }
    
    public function show(Blog $blog)
    {
        return view('blog ', [
            "title" => "$blog->title",
            "blog" => $blog
        ]);
    }

    // public function confirm(Blog $blog)
    // {
    //     $blog->is_confirmed = true;
    //     $blog->save();

    //     return redirect()->back()->with('success', 'Blog has been confirmed.');
    // }

    // public function reject(Blog $blog)
    // {
    //     $blog->is_confirmed = false;
    //     $blog->save();

    //     return redirect()->back()->with('success', 'Blog has been rejected.');
    // }

}
