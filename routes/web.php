<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\ProductList;
use App\Http\Livewire\ShoppingCart;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ProductList::class)->name('home');
Route::get('/product/{id}', ProductDetail::class)->name('product.detail');
Route::get('/cart', ShoppingCart::class)->name('shopping.cart');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', ProductList::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
