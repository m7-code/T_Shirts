<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    // Home page 
    public function home()
    {
        $products = Product::all(); 
        return view('home', compact('products'));
    }

    //  T-Shirt detail page
    public function tshirt($id)
    {
        $product = Product::findOrFail($id); // ek product
        return view('tshirt', compact('product'));
    }

    //  product add form
    public function create()
    {
        return view('admin.create-product');
    }

    //  product save 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'image' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        // image upload
        $path = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $path, // sirf path save ho raha
        ]);

        return redirect('/')->with('success', 'Product added successfully');
    }
}
