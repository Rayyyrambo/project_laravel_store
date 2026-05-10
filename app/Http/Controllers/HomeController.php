<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $products = Product::latest()->limit(3)->get();
        return view('pages.publik.home', compact('products'));
    }
}


