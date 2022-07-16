<?php
use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\CategoryController;
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

Route::prefix('category')->group(function() {
    Route::get('/', 'CategoryController@index');
   

});
Route::post('category-store','CategoryController@store');
Route::get('/category_show', 'CategoryController@show');
Route::get('/category_edit/{id}', 'CategoryController@edit');
Route::post('/category-update/{id}','CategoryController@update');

Route::get('/category-destroy/{id}', 'CategoryController@destroy');