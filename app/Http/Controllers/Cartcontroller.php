<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cartcontroller extends Controller
{
    public function index(){
        return view('pages.order');
    }

    public function cart(){
        return view('pages.cart');
    }
}
