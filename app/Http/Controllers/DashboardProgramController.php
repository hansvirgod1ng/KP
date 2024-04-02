<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.programs.index',[
            "title" => "Programs Dashboard - Hongde College",
            "page" => "programs",
            "programs" => Program::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programs.create',[
            "title" => "Create Program - Hongde College",
            "page" => "programs",
            "categories" => Category::all()
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
            'category_id' => 'required',
            'description' => 'required',
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('programs');
        }

        Program::create($validateData);

        return redirect('/dashboard/programs')->with('success', 'New Program Has Been Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('admin.programs.edit',[
            "title" => "Edit Program - Hongde College",
            "page" => "programs",
            "program" => $program,
            "categories" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image|file|max:3072',
        ];

        if($request->slug != $program->slug){
            $rules['slug'] = 'required|unique:blogs';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('programs');
        }

        Program::where('id', $program->id)->update($validateData);

        return redirect('/dashboard/programs')->with('success', 'Program Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        if($program->image){
            Storage::delete($program->image);
        }
            
        
        Program::destroy($program->id);
        return redirect('/dashboard/programs')->with('success', 'Program has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Program::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
