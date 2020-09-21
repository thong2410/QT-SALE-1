<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function getorder(){
        return view('admin.orders.order');
    }
}
