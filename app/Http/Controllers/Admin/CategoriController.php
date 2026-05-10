<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest('created_at')->get();
        return view('pages.admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // validasi data
            $data = $request->validate([
                'name'=>'required|string|max:255',
            
            ]);
            // simpan ke database
            Category::create($data);
            // redirect ke halaman index dengan pesan sukses
            return to_route('admin.categories.index')->with('success', 'kategori berhasi ditambahkan');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('pages.admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // ambil data kategori berdasarkan id
            $category = Category::findOrFail($id);
            $data = $request->validate([
                'name' => 'required|string|max:255',
            ]);
            $category->update($data);
            // redict halaman ke index dengan pesan sukses
            return to_route('admin.categories.index')->with('success', 'kategori berhasil diperbaruhi');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     try {
        $category = Category::findOrFail($id);
        $category->delete();
        // 
        return to_route('admin.categories.index')->with('success', 'Kategori berhasil di edit');
     } catch (\Throwable $th) {
        return back()->with('error', $th->getMessage());
     }   
    }
}
