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

        //dd($filtroCategoria);

        //Buscar todos produtos ativos com a categoria
        $listaProduto = Produto::with('CategoriaProduto') ->where('status_produto', 'ATIVO') ->orderby('ordem_produto') -> get();

        //dd($listaProduto);

        return view('site.cardapio.index', compact ('filtroCategoria','listaProduto'));

    }


    public function showProduto($slug){

        $produto = Produto::with('CategoriaProduto')->where('status_produto', 'ATIVO')->where('slug_produto', $slug)->firstOrFail();
        //dd($produto);
        
        return view('site.produto.produto', compact ('produto'));


        $listaProduto = Produto::with('CategoriaProduto')->where('status_produto', 'ATIVO')->orderBy('ordem_produto')->get();
        
    }

  
 

    }
