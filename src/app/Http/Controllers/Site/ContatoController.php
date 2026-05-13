<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use illuminate\http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('site.contato.index');
    }
}