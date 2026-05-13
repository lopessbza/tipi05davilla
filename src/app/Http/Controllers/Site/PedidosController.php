<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use illuminate\http\Request;

class PedidosController extends Controller
{
    public function pedidos()
    {
        return view('site.pedidos.index');
    }
}