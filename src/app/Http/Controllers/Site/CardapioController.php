<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
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

         $categoriaAtiva = 'all';

        return view('site.cardapio.index', compact('filtroCategoria','listaProduto','categoriaAtiva'));

    }


    public function showProduto($slug){

        $produto = Produto::with('CategoriaProduto')->where('status_produto', 'ATIVO')->where('slug_produto', $slug)->firstOrFail();
        
        $produtosRelacionados = Produto::where('status_produto', 'ATIVO')->where('id_categoria', $produto->id_categoria)->where('id_produto', '!=', $produto->id_produto)
            ->orderBy('ordem_produto')
            ->get();
        

        $listaCategoria = Categoria::where('status_categoria', 'ATIVO')
            ->orderBy('ordem_categoria')
            ->get();
        
        //return view('site.produto.produto', compact ('produto'));
        
            //dd($listaCategoria);

        return view('site.produto.produto', compact('produto', 'produtosRelacionados', 'listaCategoria'));
    }

     public function show($id){

        $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')->orderBy('ordem_categoria')->get();

        $listaProduto = Produto::with('CategoriaProduto')->where('status_produto', 'ATIVO')->orderBy('ordem_produto')->get();

        $categoriaAtiva = '.categoria-' . $id; return view('site.cardapio.index', compact('filtroCategoria','listaProduto','categoriaAtiva'));
    }

    }

    