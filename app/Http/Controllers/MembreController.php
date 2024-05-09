<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index(){
        return view('membres.index');
    }

    public function create(){
        return view('membres.create');
    }
}
