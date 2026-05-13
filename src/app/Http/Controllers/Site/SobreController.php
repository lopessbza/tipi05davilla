<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use illuminate\http\Request;

class SobreController extends Controller
{
    public function sobre()
    {
        return view('site.sobre.index');
    }
}