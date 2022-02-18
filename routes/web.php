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
//Products
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products{product}', 'ProductController@show')->name('products.show');
//Buyers
Route::get('/buyers', 'BuyerController@index')->name('buyers.index');
Route::get('/buyers{buyer}', 'BuyerController@show')->name('buyers.show');
//Categories
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories{category}', 'CategoryController@show')->name('categories.show');
//Contacts
Route::get('/contacts', 'HomeController@contacts')->name('contacts');

// *************** AUTHENTICATION/ADMIN ROUTES ***************
Auth::routes();

// Se voglio disabilitare la rotta di registrazione
//Auth::routes(['register' => false]);

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function() {

  Route::get('/', 'HomeController@index')->name('dashboard');
  // Resource Controller for Products
  Route::resource('/products', 'ProductController');
  // Resource Controller for Buyers
  Route::resource('/buyers', 'BuyerController');
  //Resource Controller for Categories
  Route::resource('/categories', 'CategoryController');
});
