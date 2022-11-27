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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/shop', function(){
//    return view('shop');
// });

Route::namespace('App\Http\Controllers')->group(function(){
  Route::get('/','SiteController@index');
  Route::get('/shop', 'SiteController@shop');
  Route::get('/about','SiteController@about');
  Route::get('/product_details','SiteController@product_details');
  Route::get('/contact', 'SiteController@contact');
  Route::get('/Cart', 'SiteController@Cart');
  Route::get('/Confirmation', 'SiteController@Confirmation');
  Route::get('/element', 'SiteController@element');
  Route::get('/Login', 'SiteController@Login');
  Route::get('/Product_Checkout', 'SiteController@Product_Checkout');
  Route::get('/blog', 'SiteController@blog');
  Route::get('/blog-details', 'SiteController@blog-details');
});