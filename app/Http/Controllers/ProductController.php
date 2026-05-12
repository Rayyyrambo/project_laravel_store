<?php

namespace App\Http\Controllers;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $products = Product::latest()->limit(3)->get();
        return view('pages.publik.product', compact('products'));
    }
}
