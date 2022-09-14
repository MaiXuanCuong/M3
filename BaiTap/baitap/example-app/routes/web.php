<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// use App\Http\Controllers\ProductController;
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

Route::get('/',function(){
    return view('admin.layouts.master');
});

Route::get('products/trash',[App\Http\Controllers\ProductController::class,'trash']);
Route::get('products',[App\Http\Controllers\ProductController::class,'index']);
// Route::resource('products',App\Http\Controllers\ProductController::class);
/*
prefix: products
    GET    /                        products.index
    GET    /create                  products.create
    POST   /store                   products.store
    GET    /{id}/edit               products.edit
    PUT    /{id}/update             products.update
    GET    /{id}                    products.show
    DELETE /{id}                    products.destroy
*/