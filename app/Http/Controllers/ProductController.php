<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products= Product::all();
        return view('products.index',['products'=>$products]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $newProduct = Product::create($data);
        return redirect(route('products.index'));

    }

    public function delete(Product $product){
        return view('products.delete', compact('product'));
    }



    public function destroy(Product $product){
        $product->delete(); 
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    
    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product){
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

}