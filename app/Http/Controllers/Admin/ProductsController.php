<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest('created_at')->get();
        return view('pages.admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // validasi data
            $data = $request->validate([
                'category_id'=>'required|exists:categories,id',
                'name'=>'required|string|max:255',
                'price'=>'required|numeric|min:0',
                'stock'=>'required|integer|min:0',
                'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description'=>'nullable|string',
                
            ]);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('products', $imageName, 'public');
                $data['image'] =  $imageName;
            }
            // simpan ke database
            Product::create($data);
            // redirect ke halaman index dengan pesan sukses
            return to_route('admin.products.index')->with('success', 'produk berhasi ditambahkan');
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
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // ambil data produk berdasarkan id
            $product = Product::findOrFail($id);
            $data = $request->validate([
                'category_id'=>'required|exists:categories,id',
                'name'=>'required|string|max:255',
                'price'=>'required|numeric|min:0',
                'stock'=>'required|integer|min:0',
                'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description'=>'nullable|string',
            ]);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('products', $imageName, 'public');
                $data['image'] =  $imageName;
            }
            $product->update($data);
            return to_route('admin.products.index')->with('success', 'produk berhasil diupdate');
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
            $product = Product::findOrFail($id);
            $product->delete();
            return to_route('admin.products.index')->with('success', 'Produk berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
