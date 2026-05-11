<?php

namespace App\Http\Controllers;

use illuminate\http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class HomeController extends Controller
{
    public function home()
    {
        //buscar categoria para montar a lista de filtro
        $filtroCategoria = Categoria::where('status_categoria', 'ATIVO') ->orderby('ordem_categoria') -> get();

        // dd($filtroCategoria);

        return view('site.home.index', compact('filtroCategoria'));
    }
}