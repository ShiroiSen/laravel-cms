<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.blogs.manageBlog', [
            "title" => "Manage Blogs",
            "blogs" => Blog::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blogs.create',[
            "title" => "Create Blogs",
            "categories" => Category::all()
        ]);  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255'],
            'slug' => ['required', 'unique:blogs'],
            'category_id' => ['required'],
            'image' => ['image', 'file', 'max:1024'],
            'body' => ['required']
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Blog::create($validatedData);

        return redirect('/dashboard/blogs')->with('success', 'New blog has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blogs.show',[
            "title" => $blog->title,
            "blog" => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit',[
            "title" => "Manage Blogs",
            "blog" => $blog,
            "categories" => Category::all()
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => ['required', 'max:255'],
            'category_id' => ['required'],
            'body' => ['required']
        ];

        if ($request->slug != $blog->slug) {
            $rules['slug'] = ['required', 'unique:blogs'];
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        Blog::where('id', $blog->id)->update($validatedData);

        return redirect('/dashboard/blogs')->with('success', 'Blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Blog::destroy($blog->id);

        return redirect('/dashboard/blogs')->with('success', 'Blog has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
