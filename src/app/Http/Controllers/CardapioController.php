<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Produto;

use illuminate\http\Request;

class CardapioController extends Controller
{

    public function cardapio(){

        //buscar categoria para montar a lista de filtro
        $filtroCategoria = Categoria::where('status_categoria', 'ATIVA') ->orderby('ordem_categoria') -> get();

        //Buscar todos produtos ativos com a categoria
        $listaProduto = Produto::with('CategoriaProduto') ->where('status_produto', 'ATIVO') ->orderby('ordem_produto') -> get();


        return view('site.cardapio.cardapio', compact ('filtroCategoria','listaProduto'));

    }
}