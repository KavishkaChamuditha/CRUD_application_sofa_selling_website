<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'pro_name'      => 'required',
            'category'      => 'required',
            'description' => 'required',
            'price'         => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

     // Create a new product object
    $product = new Product();

    // Set the properties of the product object
    $product->pro_name      = $request->input('pro_name');
    $product->category      = $request->input('category');
    $product->description   = $request->input('description');
    $product->price         = $request->input('price');

    // Handle the uploaded image
    if ($request->hasFile('image')) {
        $image           = $request->file('image');
        $filename        = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/productsImg');
        $image->move($destinationPath, $filename);
        $product->image = $filename;
    } else {
        $product->image = '';
    }

    // Save the product to the database
    $product->save();

    // Redirect the user to the index page with a success message
    return redirect()->route('products.list')->with('success', 'Product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        // watch all the data is showing or not 
        // return Product ::all();
        //storing data in a variable 
        $data = Product ::all();
        return view ('products.list', ['products'=>$data]);
       
        //return view('products.list');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
