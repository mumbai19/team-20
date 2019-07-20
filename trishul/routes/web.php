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

// Route::get('/home', function () {
//     return view('UI.index');
// });

Route::get('/', function () {
    return view('UI.index');
});

Route::get('/product', function () {
    return view('UI.product');
});

Route::get('/category', function () {
    return view('UI.category');
});

Route::get('/cart', function () {
    return view('UI.cart');
});

Route::get('/donate', function () {
    return view('UI.donate');
});

Route::get('asia/japan', function () {
    return view('UI.donate');
});
Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/category/{category}' , 'ProductController@list_products');

Route::get('/cart/{product}/{category}' ,  'CartController@add_to_cart');

