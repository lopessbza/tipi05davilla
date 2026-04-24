<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class CardapioController extends Controller
{
    public function cardapio()
    {
        return view('site.cardapio.cardapio');
    }
}