<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Make sure to use the correct namespace

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', ['products' => product::get()]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        // validate data
        $request->validate([
            'name' => 'required ',
            'description' => 'required ',
            'image' => 'required |mimes:jpeg,jpg,png|max:10000'
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new Product; // Use the correct namespace and class name
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Product created successfully!');
    }
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('products.edit', ['product' => $product]);

    }
    public function update(Request $request, $id)
    {
        // validate data
        $request->validate([
            'name' => 'required ',
            'description' => 'required ',
            'image' => 'nullable |mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $product=Product::where('id',$id)->first();
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return back()->withSuccess('Product updated successfully!');
    }
    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product deleted successfully!');
    }
    public function details($id){
        $product = Product::where('id', $id)->first();
        return view('products.details', ['product' => $product]);
    }
}
