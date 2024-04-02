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
Route::get('/logout' , [Dashboard::class, 'logout'])->name('logout');

/* END USER */

Route::get('/', [Shopping::class, 'GetProducts'])->name('products');
Route::get('/shopping/addtocart/{id}', [Shopping::class, 'addToCart'])->name('add-to-cart');


/* LOCALIZATION */
Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});


