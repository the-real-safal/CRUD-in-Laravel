<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[productcontroller::class,'index'])->name('product.index');
Route::get('/products/create',[productcontroller::class,'create'])->name('products.create');
Route::post('/products/store',[productcontroller::class,'store'])->name('products.store');
Route::get('products/{id}/edit',[productcontroller::class,'edit'])->name('products.edit');
Route::put('products/{id}/update',[productcontroller::class,'update'])->name('products.update');
Route::get('products/{id}/delete',[productcontroller::class,'destroy']);
Route::get('products/{id}/details',[productcontroller::class,'details']);