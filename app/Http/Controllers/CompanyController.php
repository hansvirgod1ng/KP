<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.home',[
            "title" => "Learn Mandarin With Us - Hongde College",
            "page" => "Home",
            "blogs" => Blog::latest()->get(),
            "categories" => Category::all(),
        ]);
    }

    public function about()
    {
        return view('company.about',[
            "title" => "About Us - Hongde College",
            "page" => "About",
        ]);
    }

    public function program()
    {
        return view('company.program',[
            "title" => "Our Programs - Hongde College",
            "page" => "Program",
            "categories" => Category::all(),
        ]);
    }

    public function programByCategory(Category $category)
    {
        return view('company.program_detail',[
            "title" => "Our Programs - Hongde College",
            "page" => "Program",
            "category" => $category,
            "programs" => $category->programs,
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
