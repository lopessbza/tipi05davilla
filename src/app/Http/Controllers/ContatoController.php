<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('site.contato.contato');
    }
}