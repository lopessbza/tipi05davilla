<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('site.home.index');
    }
}