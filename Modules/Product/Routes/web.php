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

Route::prefix('product')->group(function() {
    Route::get('/', 'ProductController@index');
});
Route::post('/product-store','ProductController@store');
Route::get('/product_show','ProductController@show');
Route::get('/secondary_product','ProductController@secondary');

Route::post('/secondary_store','ProductController@secondarystore');
Route::get('/product_map','ProductController@productMap');
Route::post('/map_store','ProductController@productmapStore');

