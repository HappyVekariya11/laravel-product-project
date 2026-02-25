<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\VariantPrice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
     public function index()
    {
       $products = Product::with('variants.images', 'variants.prices')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'title' => $request->title,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }
}
