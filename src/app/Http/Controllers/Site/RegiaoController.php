<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use illuminate\http\Request;

class RegiaoController extends Controller
{
    public function regiao()
    {
        return view('site.regiao.index');
    }
}