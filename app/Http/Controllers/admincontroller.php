<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function getadmin(){
        return view("admin.layout.master");
    }
}
