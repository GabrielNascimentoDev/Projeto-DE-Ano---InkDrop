<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
  $products = $request->collection 
    ? Product::where('collection', $request->collection)->paginate(12)
    : Product::paginate(12);
    return view('products', compact('products'));
}

    public function show(Product $product){
        return view('product', compact('product'));
    }
}
