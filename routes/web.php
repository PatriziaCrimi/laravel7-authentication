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

// *************** PUBLIC/GUEST ROUTES ***************

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products{product}', 'ProductController@show')->name('products.show');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');

// *************** AUTHENTICATION/ADMIN ROUTES ***************
Auth::routes();

// Se voglio disabilitare la rotta di registrazione
//Auth::routes(['register' => false]);

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function() {

  Route::get('/', 'HomeController@index')->name('dashboard');
  // Resource Controller for Products
  Route::resource('/products', 'ProductController');
});
