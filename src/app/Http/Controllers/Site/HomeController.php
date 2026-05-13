<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use illuminate\http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class HomeController extends Controller
{
   public function home()
{
    // 1. Procura as categorias (já estava a fazer)
    $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();

    // 2. ADICIONE ESTA LINHA: Procura os produtos para o seu portfólio
    $listaProduto = Produto::all(); // Ou use Produto::where('status', 'ATIVO')->get();

    // 3. ADICIONE 'listaProduto' ao compact
    return view('site.home.index', compact('filtroCategoria', 'listaProduto'));
}
}