<?php
use App\Http\Controllers\Shopping;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
}); 
/* -> Middleware('auth');
 */

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
Route::get('/dashboard/cart', [Dashboard::class,'GetCart'])->name('cart');
Route::get('/dashboard/cart/delete/{id}', [Dashboard::class, 'deleteCartItem'])->name('deleteCartItem');
Route::get('/logout' , [Dashboard::class, 'logout'])->name('logout');

/* END USER */
Route::get('/', [Shopping::class, 'Shopping'])->name('Shopping');
Route::get('/shopping', [Shopping::class, 'Shopping'])->name('Shopping');
Route::get('/shopping/addtocart/{id}', [Shopping::class, 'addToCart'])->name('add-to-cart');
Route::get('/shopping/chairs', [Shopping::class, 'GetChairsList'])->name('chairs');
Route::get('/shopping/chairs/details/{id}', [Shopping::class, 'ShowDetails'])->name('show-details');
Route::get('/shopping/carts', [Shopping::class, 'ShowCart'])->name('carts');
Route::get('shopping/cart/delete/{id}', [Shopping::class, 'deleteCartItemForUser'])->name('deleteCartItemForUser');


/* LOCALIZATION */
Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});


/*  API   */
Route::get('/getcoffeehot', [Shopping::class, 'GetCoffeHot']);
Route::get('/getuser', [Shopping::class, 'GetUsersAPI']);



