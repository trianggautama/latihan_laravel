<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function rooms()
    {
        return view('rooms');
    }

     public function assets()
    {
        return view('assets');
    }
}
