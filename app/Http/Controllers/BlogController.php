<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('company.blog', [
            "title" => "Blogs & Announcements - Hongde College",
            "page" => "Blog",
            "blogs" => Blog::orderBy('id', 'desc')->paginate(7)

        ]);
    }

    public function show(Blog $blog)
    {
        return view('company.blog_single', [
            "title" => "Blogs & Announcements - Hongde College",
            "page" => "Blog",
            "blog" => $blog
        ]);
    }
}
