<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
Use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoris = Category::all();
        return view('category.index', ['categoris'=>$categoris]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|unique:categories,name'
        ]);

        // Category::create($validatedData);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();

        return redirect()->back()->with('success','Successfully Added');


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
