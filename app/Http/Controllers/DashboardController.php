<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $a=5;
        $b=1;
        $c=$a+$b;
        
        return view("dashboard.index", compact("c"));
    }
}
