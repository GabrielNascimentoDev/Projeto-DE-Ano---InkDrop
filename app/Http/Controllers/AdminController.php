<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
{
    if (!auth()->user()->is_admin) {
        return redirect()->route('home');
    }
    
    $products = Product::all();
    $users    = User::all();
    return view('dashboard', compact('products', 'users'));
}

    public function deleteProduct($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('admin')->with('success', 'Produto deletado!');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit-product', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->only(['name', 'brand', 'price', 'stock', 'description']));
        return redirect()->route('admin')->with('success', 'Produto atualizado!');
    }
}