<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use illuminate\Support\Facades\View;
use App\Models\Categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
             View::composer('partials.header', function ($view){
            //buscar todas as categorias ordenar por nome 
            $categorias = Categoria::orderBy('nome_categoria')->get();

            //var_dump($categorias);
            dd($categorias);

            $view->with('categorias', $categorias);
        });
    }
}
