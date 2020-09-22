<?php
use App\Http\Controllers\ordercontroller;
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
Route::get("orderview",[ordercontroller::class,'getorder']);
Route::get("orderdetails",[ordercontroller::class,'getorderdetails']);
Route::get("orderuser",[ordercontroller::class,'getorderuser']);
