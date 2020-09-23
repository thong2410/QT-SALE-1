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
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'product'], function () {
        Route::get('list', 'App\Http\Controllers\admin\AdminController@getproductsList');
        Route::get('add', 'App\Http\Controllers\admin\AdminController@getproductsAdd');
        Route::get('edit', 'App\Http\Controllers\admin\AdminController@getproductsEdit');
    });
    Route::group(['prefix' => 'type_product'], function () {
        Route::get('list', 'App\Http\Controllers\admin\AdminController@gettypeList');
        Route::get('add', 'App\Http\Controllers\admin\AdminController@gettypeAdd');
        Route::get('edit', 'App\Http\Controllers\admin\AdminController@gettypeEdit');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'App\Http\Controllers\admin\AdminController@getuserList');
        Route::get('add', 'App\Http\Controllers\admin\AdminController@getuserAdd');
        Route::get('edit', 'App\Http\Controllers\admin\AdminController@getuserEdit');
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('list', 'App\Http\Controllers\admin\AdminController@getorderList');
    });
});
