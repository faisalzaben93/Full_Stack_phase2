<?php

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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input as input;
use App\User;

Route::get('/','CategoryController@index');
Route::get('/shop','CategoryController@index');
Route::get('/shop/home','CategoryController@index');
Route::get('/main', 'HomeController@index')->name('home');

Route::resource('/shop/category', 'Category\CategoriesController',['as'=>'shop']);
Route::resource('/shop/product', 'CategoryController',['as'=>'shop']);
//item route
Route::resource('/account/product','Item\ItemController',['as'=>'account']);
Route::post('/shop/product/comment/{id}', 'CategoryController@addComment')->name('addComment');
Auth::routes();
//must route to account/profile/main
Route::resource('/account/profile','UserAccountController',['as'=>'account']);
