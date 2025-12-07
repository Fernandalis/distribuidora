<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Acessorio;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() {
//     echo 'Olá';
// });

route::view('/', 'home')->name('home');

route::view('/quem', 'quem')->name('quem');

Route::get('/lista-produtos', function () {
    $produtos = Produto::all();
    return view('lista-produtos', compact('produtos'));
})->name('lista-produtos');

Route::get('/lista-acessorios', function () {
    $acessorios = Acessorio::all();
    return view('lista-acessorios', compact('acessorios'));
})->name('lista-acessorios');



// route::get('/quem/{quemsomos}',
// function(Filme $filme){
//    return view('detalhes-filmes', compact('filme'));
// })->name('detalhes-filme');