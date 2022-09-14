<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;

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
Route::get('/', [CategoriesController::class,'home'])->name('/');
Route::prefix('categories')->group(function(){
    Route::get('/', [CategoriesController::class,'index'])->name('categories');
    Route::get('/add', [CategoriesController::class,'create'])->name('categories.add');
    
    Route::post('/store', [CategoriesController::class, 'store'])->name('categories.store');
    
    Route::delete('/delete/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    
    Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
    
    Route::put('/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
});

Route::prefix('products')->group(function(){
    Route::get('/', [ProductsController::class,'index'])->name('products');
    Route::get('/add', [ProductsController::class,'create'])->name('products.add');
    
    Route::post('/store', [ProductsController::class, 'store'])->name('products.store');
    
    Route::delete('/delete/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
    
    Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
    
    Route::put('/update/{id}', [ProductsController::class, 'update'])->name('products.update');
});


