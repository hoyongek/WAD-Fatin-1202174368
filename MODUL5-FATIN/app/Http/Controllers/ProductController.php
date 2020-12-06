<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
 
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('products.create');
    }
 
    public function store(Request $request)
    {

        Product::create($request->all());
 
        return redirect()->route('products.index')
                        ->with('success','Post created successfully.');
    }
 
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
 
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
 
    public function update(Request $request, Product $product)
    {

        $product->update($request->all());
 
        return redirect()->route('products.index')
                        ->with('success','Post updated successfully');
    }
 
    public function destroy(Product $product)
    {
        $product->delete();
 
        return redirect()->route('products.index')
                        ->with('success','Post deleted successfully');
    }
}
