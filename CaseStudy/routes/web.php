<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [CategoriesController::class,'index'])->name('/');
Route::get('/add', [CategoriesController::class,'create'])->name('add');

Route::post('/store', [CategoriesController::class, 'store'])->name('categories.store');

Route::delete('/delete/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');

Route::put('/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');

