<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index',[
            "title" => "Dashboard - Hongde College",
            "page" => "dashboard",
            "totalPrograms" => Program::all()->count(),
            "totalBlogs" =>Blog::all()->count(),
        ]);
    }
}
