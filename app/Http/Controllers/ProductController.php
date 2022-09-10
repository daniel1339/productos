<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;



class ProductController extends Controller
{
    public function index()
    {
        
        $products = Product::all();
        return view('products.index', compact('products'));
    }

   
    public function create()
    {
       return view('products.create');
    }

    
    public function store(StoreProductRequest $request)
    {
        
        $product = new Product();
        $product->name = $request->name;
        $product->reference = $request->reference;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return to_route('products.show', $product);
    }

   
    public function show( Product $product)
    {
        return view('products.show', compact('product'));
    }

  
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

   
    public function update(StoreProductRequest $request, Product $product)
    {
       
        $product->name = $request->name;
        $product->reference = $request->reference;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return to_route('products.show', $product);  
    }

   
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index');
    }
}
