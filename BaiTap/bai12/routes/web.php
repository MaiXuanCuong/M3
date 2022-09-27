<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;

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

Route::get('/', [AdminLoginController::class,'viewlogin'])->name('viewlogin');
Route::post('/check', [AdminLoginController::class,'checklogin'])->name('check');
Route::post('/reg', [AdminLoginController::class,'register'])->name('register');
Route::get('/register', [AdminLoginController::class,'viewregister'])->name('viewregister');
