<?php

use App\Http\Controllers\orderscontroller;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
//order
Route::get('/test',[orderscontroller::class,'getorder']);
