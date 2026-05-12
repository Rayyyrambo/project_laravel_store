<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        // Best Sellers - 4 produk terbaru
        $bestSellers = Product::whereHas('Category', function($query){
            $query->whereIn('name', ['Baju Pria', 'Baju Wanita', 'Sepatu']);
        })->latest()->get();
        
        // New Brands - produk dari kategori tertentu
        $newBrands = Product::whereHas('category', function($query) {
            $query->where('name', 'NewBranch');
        })->latest()->get();
        
        return view('pages.publik.home', compact('bestSellers', 'newBrands'));
    }
}


