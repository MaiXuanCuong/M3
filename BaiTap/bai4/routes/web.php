<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TaskController;

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
// Route::group(['prefix' => 'customers'], function (){
//     Route::get('/',[CustomerController::class,'index'])->name('customers');
// });

Route::get('index',[TaskController::class,'index'])->name('index');
Route::get('create',[TaskController::class,'create'])->name('create');
Route::post('store',[TaskController::class,'store'])->name('store');
// Route::put('store',[TaskController::class,'store'])->name('store');