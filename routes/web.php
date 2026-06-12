<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;



Route::get('/', function(){ return view('home'); })->name('home');

Route::get('/carrinho', [CartController::class, 'index'])->name('cart');
Route::post('/carrinho/adicionar', [CartController::class, 'add'])->name('cart.add');
Route::patch('/carrinho/atualizar', [CartController::class, 'update'])->name('cart.update');
Route::delete('/carrinho/remover/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/colecoes', function(){ return view('collections'); })->name('collections');
Route::get('/contato', function(){ return view('contact'); })->name('contact');
Route::get('/produtos', [ProductController::class, 'index'])->name('products');
Route::get('/produtos/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/meus-pedidos', function() {
        $orders = \App\Models\Order::where('user_id', auth()->id())
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('orders', compact('orders'));
    })->name('orders');

});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::delete('/produto/{id}', [AdminController::class, 'deleteProduct'])->name('admin.product.delete');
    Route::get('/produto/{id}/editar', [AdminController::class, 'editProduct'])->name('admin.product.edit');
    Route::patch('/produto/{id}', [AdminController::class, 'updateProduct'])->name('admin.product.update');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/pedido/{id}/sucesso', function($id) {
        $order = \App\Models\Order::findOrFail($id);
        return view('order-success', compact('order'));
    })->name('order.success');
});

require __DIR__.'/auth.php';