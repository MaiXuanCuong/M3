<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\tinhchietkhau;
use App\Http\Controllers\dich;

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
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/greeting/{name?}', function ($name = null) {
//     if($name){

//         echo 'Hello '.$name.' !';
//     } else{
//         echo "hello nhé";
//     }
//     return view('welcome');
// });
// Route::get('dangnhap', function (Request $request) {
//     return view('dangnhap');
// });

Route::get('index', [loginController::class , 'index'])->name('index');
            //url                  ``````````//function
Route::post('check', [loginController::class , 'check'])->name('check');

Route::get('index1', [tinhchietkhau::class , 'index'])->name('index1');
Route::post('calculate', [tinhchietkhau::class , 'calculate'])->name('calculate');

Route::get('index2', [dich::class , 'index'])->name('index2');
Route::post('translate', [dich::class , 'translate'])->name('translate');

