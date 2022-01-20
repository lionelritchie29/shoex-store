<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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

    public function edit($id) {
        $product = Product::find($id);
        $brands = Brand::all();
        return view('products.update', ['product' => $product, 'brands' => $brands]);
    }

    public function create() {
        $brands = Brand::all();
        return view('products.create',  ['brands' => $brands]);
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'size' => 'required',
            'description' => 'required',
            'price' => 'required',
            'brand_id' => 'required'
        ]);

        if ($request->has('image')) {
            $filepath = $request->file('image')->store('public/images/products');
            $processedPath = str_replace("public/images", "", $filepath);
            $validate["image_path"] = $processedPath;
        }
        else {
            $validate["image_path"] = "";
        }

        Product::create($validate);
        return redirect()->route('home')->with('success', 'Products inserted succesfully');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'size' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $product = Product::find($id);
        
        $product->name = $request->input('name');
        $product->size = $request->input('size');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        
        if ($request->has('image')) {
            $filepath = $request->file('image')->store('public/images/products');
            $processedPath = str_replace("public/images", "", $filepath);
            $product->image_path = $processedPath;
        }
        
        $product->save();

        return redirect()->route('home')->with('success', 'Products updated succesfully');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('home')->with('success', 'Products deleted succesfully');
    }
}
