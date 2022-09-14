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
// Route::get('admin',App\Http\Controllers\AdminController::class)->middleware('auth');
Route::get('admin',App\Http\Controllers\AdminController::class);

Route::get('/dang-nhap',function(){
    echo 'Trang dang nhap';
})->name('login');

Route::get('/link-thieu-nhi',function(){
    echo 'Link thieu nhi';
})->name('thieu-nhi');

Route::get('/link-vip',function(){
    echo 'Link vip';
})->middleware('checkage');



Route::prefix('products')->group(function () {
    // lay tat ca danh sach
    Route::get('/',[App\Http\Controllers\ProductController::class,'index'])->name('products.index');
    //toi trang them moi
    Route::get('create',[App\Http\Controllers\ProductController::class,'create'])->name('products.create');
    // trang them moi -> Nhan du lieu tu form them moi
    Route::post('/store',[App\Http\Controllers\ProductController::class,'store'])->name('products.store');
    // toi trang chinh sua
    Route::get('/{id}/edit', [App\Http\Controllers\ProductController::class,'edit'])->name('products.edit');
    // Nhan du lieu tu form cap nhat
    Route::put('/update/{id}',function(Request $request, $id){
        dd( $request->all() );
    })->name('products.update');
    //xem chi tiet
    Route::get('/{id}', [App\Http\Controllers\ProductController::class,'show'])->name('products.show');
    // xoa du lieu
    Route::delete('/destroy/{id}',function($id){
    
    })->name('products.destroy');
});


