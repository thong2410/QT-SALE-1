<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function getorder(){
        return view("admin.orders.order");
    }
}
