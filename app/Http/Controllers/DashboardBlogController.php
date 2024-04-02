<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('admin.blogs.index',[
        "title" => "Blogs Dashboard - Hongde College",
        "page" => "blogs",
        "blogs" => Blog::all(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create',[
            "title" => "Create Blog - Hongde College",
            "page" => "blogs",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs',
            'image' => 'nullable|image|file|max:3072',
            'body' => 'required',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('blogs-image');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Blog::create($validateData);

        return redirect('/dashboard/blogs')->with('success', 'New Blog Has Been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit',[
            "title" => "Edit Blog - Hongde College",
            "page" => "blogs",
            "blog" => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'nullable|image|file|max:3072',
        ];

        

        if($request->slug != $blog->slug){
            $rules['slug'] = 'required|unique:blogs';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('blogs-image');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        Blog::where('id', $blog->id)->update($validateData);

        return redirect('/dashboard/blogs')->with('success', 'Blog Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        
        if($blog->image){
            Storage::delete($blog->image);
        }
            
        
        Blog::destroy($blog->id);
        return redirect('/dashboard/blogs')->with('success', 'Blog has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
