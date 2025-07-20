<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Display all products on the homepage
    public function index()
    {
        $products = Product::all();
        return view('livewire.shop.index', compact('products'));
    }

    // Optional: Show single product detail (if you implement it later)
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('livewire.shop.show', compact('product'));
    }
}