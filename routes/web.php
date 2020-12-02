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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('products', 'ProductsController@store')->name('products.store');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/create', 'ProductsController@create')->name('products.create');
Route::put('products/{product}', 'ProductsController@update')->name('products.update');
Route::get('/products/{product}', 'ProductsController@show')->name('products.show');
Route::delete('/products/{product}', 'ProductsController@destroy')->name('products.destroy');
Route::get('/products/{product}/edit', 'ProductsController@edit')->name('products.edit');

