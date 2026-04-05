<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
 
    public function index()
    {
        return Product::all();
    }

    public function add()
    {
        $product = new Product();
        $product->name = "iPhone 14 Pro Max";
        $product->description = "This is the latest iPhone model with advanced features and improved performance.";
        $product->price = 1099.99;
        $product->user_id = 1;
        $product->save();

        return 'Product added successfully';
    }

    public function slug($slug)
    {
        return 'This is '. $slug . ' product page';
    }

    public function show(string $id)
    {
        $product =  Product::findOrFail($id);
        return $product;
    }

    public function update(string $id)
    {
        $product = Product::findOrFail($id);
        $product->name = "iPhone 14 Pro Max Updated";
        $product->update();

        return 'Product updated successfully';
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return 'Product with ID ' . $id . ' deleted successfully';
    }

};