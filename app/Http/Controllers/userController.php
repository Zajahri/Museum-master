<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function appointment() {
        return view('pages/appointment');
    }

    public function dashboard() {
        return view('pages/dashboard');
    }

    public function inventory() {
        return view('pages/inventory');
    }

    public function visitor() {
        return view('pages/visitor');
    }

 
}
