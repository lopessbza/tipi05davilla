<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class SobreController extends Controller
{
    public function sobre()
    {
        return view('site.sobre.index');
    }
}