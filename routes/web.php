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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customers', 'CustomerController@index')->name('customer.index');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
Route::get('/customer/view/{id}', 'CustomerController@view')->name('customer.view');
Route::post('/customer/update', 'CustomerController@update')->name('customer.update');
Route::post('/customer/destroy', 'CustomerController@destroy')->name('customer.destroy');

Route::get('/products','ProductController@index')->name('product.index');
