<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class PedidosController extends Controller
{
    public function pedidos()
    {
        return view('site.pedidos.index');
    }
}