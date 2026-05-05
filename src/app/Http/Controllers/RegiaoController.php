<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class RegiaoController extends Controller
{
    public function regiao()
    {
        return view('site.regiao.index');
    }
}