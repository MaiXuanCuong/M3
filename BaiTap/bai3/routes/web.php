<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
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
Route::get('/', function () {
    return view('index');
});
Route::post('/check-email',[UserController::class, 'validationEmail'])->name('checkEmail');


Route::get('customer',[CustomerController::class, 'index'])->name('customer');
Route::get('show/{id?}',[CustomerController::class, 'show'])->name('show');
Route::get('edit/{id?}',[CustomerController::class, 'edit'])->name('edit');
Route::put('update/{id?}',[CustomerController::class, 'update'])->name('update');
Route::delete('delete/{id?}',[CustomerController::class, 'destroy']) ;
