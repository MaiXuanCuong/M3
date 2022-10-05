<?php

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

Route::get('/',[Controller::class,"index"] );
// Route::get('index3', function () {
//     // gọi view retrn view

// // echo "<br>".route('index3');
// // echo "</br>".route('create');
// $params =[

// ];
// return view('',$params);

// })->name('index3');

// Route::get('/create', function(){
//     dd("Trang Thêm Mới");
// })->name('create');

// Route::put('/update/{id}', function(Request $request, $id){
//     dd("Trang Update".$id);
// });
// Route::post('/store', function(Request $request){
// dd($request->all());
// });
// Route::get('/edit/{id}',function($id){
// dd('Trang Chỉnh Sửa'.$id);
// });


Route::group();
