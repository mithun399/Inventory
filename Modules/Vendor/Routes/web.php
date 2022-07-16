<?php
use Illuminate\Support\Facades\Route;
use Modules\Vendor\Http\Controllers\VendorController;
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

Route::prefix('vendor')->group(function() {
    Route::get('/', 'VendorController@index');


   
});

//vendor start
Route::post('/store','VendorController@store');
Route::get('/show', 'VendorController@show');
Route::get('/edit/{id}', 'VendorController@edit');
Route::post('/update/{id}','VendorController@update');

Route::get('/destroy/{id}', 'VendorController@destroy');

//vendor end

//category start


//category start

