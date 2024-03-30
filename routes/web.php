<?php
use App\Http\Controllers\Shopping;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* DASHBOARD */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [Dashboard::class,'Index'])->name('index');
Route::get('/dashboard/products', [Dashboard::class,'GetProduct'])->name('products');
Route::get('/product/search' , [Dashboard::class, 'Search'])->name('search');
Route::get('/del/{id}', [Dashboard::class,'Del'])->name('del');
Route::get('/edit/{id}', [Dashboard::class,'Edit'])->name('edit');
Route::post('/dashboard/update', [Dashboard::class,'Update'])->name('update');
Route::post('/dashboard/createproducts', [Dashboard::class,'CreateProduct'])->name('createproducts');
Route::get('/logout' , [Dashboard::class, 'logout'])->name('logout');

/* END USER */



