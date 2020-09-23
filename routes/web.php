<?php
use App\Http\Controllers\orderscontroller;
use App\Http\Controllers\admincontroller;
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
//order
Route::get("orderview",[orderscontroller::class,'getorder']);
Route::get("orderdetails",[orderscontroller::class,'getorderdetails']);
Route::get("orderuser",[orderscontroller::class,'getorderuser']);
Route::get("admin",[admincontroller::class,'getadmin']);


