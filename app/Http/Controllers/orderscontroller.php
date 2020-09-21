<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderscontroller extends Controller
{
    public function getorder(){
        return view('admin.orders.order');
    }
}

