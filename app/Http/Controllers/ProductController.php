<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('index')->with('products', $products);
    }

    public function show($id) {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }
}
