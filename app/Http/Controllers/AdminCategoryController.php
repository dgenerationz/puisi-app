<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $this->authorize('admin');

        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');

        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            "category" => "required",
        ]);

        Category::query()->create([
            'name' => $request->category,
            'uuid' => Str::uuid(),
        ]);

        return redirect('/dashboard/categories')->with('success', 'Kategori puisi berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($uuid)
    {
        $category = Category::query()->where('uuid', $uuid)->first();

        return view('dashboard.categories.update', [
            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $uuid)
    {

        $category = Category::query()->where('uuid', $uuid)->first();
        // dd($category);

        if ($request->category != $category->name) {

            $request->validate([
                "category" => "required|unique:categories,name"
            ]);

            $category->name = $request->category;
            $category->update();
        }


        return redirect('/dashboard/categories')->with('success', 'Category ' . $request->name . 'Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($uuid)
    {

        $category = Category::query()->where('uuid', $uuid)->first();

        $namaCategory = $category->name;
        $category->delete();

        return redirect('/dashboard/categories')->with('success', 'Category ' . $namaCategory . ' Berhasil dihapus');
    }
}
