<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/carrinho', function(){
    return view('cart');
})->name('cart');

Route::get('/colecoes', function(){
    return view('collections');
})->name('collections');

Route::get('/contato', function(){
    return view('contact');
})->name('contact');

Route::get('/produtos', [ProductController::class, 'index'])
     ->name('products');

Route::get('/produtos/{product}', [ProductController::class, 'show'])
     ->name('product.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';