<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\RegiaoController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'home'])->name( 'home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name( 'sobre');
Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name( 'cardapio.index');
/** Submenu de Cardapio */
Route::get('/cardapio/categoria/id', [CardapioController::class, 'show'])->name('cardapio.categoria');


Route::get('/contato', [ContatoController::class, 'contato'])->name( 'contato');
Route::get('/pedidos', [PedidosController::class, 'pedidos'])->name( 'pedidos');
Route::get('/regiao', [RegiaoController::class, 'regiao'])->name( 'regiao.index');
/** Submenu de Região */
Route::get('/regiao/area/id', [RegiaoController::class, 'show'])->name('regiao.area');

