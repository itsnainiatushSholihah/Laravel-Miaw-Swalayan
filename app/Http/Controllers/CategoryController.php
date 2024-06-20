<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        
        return view('category.list', [
            'data' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->all());

        return redirect('/categories')->with([
            'mess' => 'Data Berhasil diSimpan Ya Sayang',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('/category.add', [
            'data'=>$category,
        ]);
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
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->fill($request->all());
        $category->save();

        return redirect('/categories')->with([
            'mess' => 'Data Berhasil disimpan ya Sayang',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories')->with([
            'mess' => 'Data Berhasil diSimpan Ya Sayang',
        ]);
    }
}
