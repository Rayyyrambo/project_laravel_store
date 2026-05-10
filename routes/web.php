<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\karyawanController;
use App\Http\Controllers\Admin\ProductsController as AdminProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\CategoriController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product',[ProductController::class, 'index'])->name('product');
Route::get('/about',[AboutController::class, 'index'])->name('about');

Route::prefix('administrator')->middleware(['auth', 'verified'])->name('admin.')->group(function(){
    Route::resource('categories', CategoriController::class);
    Route::resource('products', AdminProductsController ::class);
    Route::get('karyawan', [karyawanController::class, 'index'])->name('karyawan');
    Route::get('dashboard', [DasboardController::class, 'index'])->name('dashboard');
});

// Route::get('/', function () {
//     return view('welcome');
// });




Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
