<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    //donhang
    public function getorder(){
        return view("admin.orders.order");
    }
    public function getorderdetails(){
        return view("admin.orders.order_details");
    }

    public function getorderuser(){
        return view("site.orderuser");
    }
}
