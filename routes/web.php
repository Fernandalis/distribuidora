<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Acessorio;
use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;
use App\Models\Blog;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() {
//     echo 'Olá';
// });

route::view('/', 'home')->name('home');

route::view('/quem', 'quem')->name('quem');

route::view('/localizacao', 'localizacao')->name('localizacao');

Route::get('/lista-produtos', function () {
    $produtos = Produto::with('categoria')->get();
    return view('lista-produtos', compact('produtos'));
})->name('lista-produtos');

route::get('/detalhes-produtos/{produtos}',
function(Produto $produtos){
   return view('detalhes-produtos', compact('produtos'));
})->name('detalhes-produtos');

Route::get('/lista-acessorios', function () {
    $acessorios = Acessorio::all();
    return view('lista-acessorios', compact('acessorios'));
})->name('lista-acessorios');

route::get('/detalhes-acessorios/{acessorios}',
function(Acessorio $acessorios){
   return view('detalhes-acessorios', compact('acessorios'));
})->name('detalhes-acessorios');

Route::get('/lista-marcas', function () {
    $marcas = Marca::all();
    return view('lista-marcas', compact('marcas'));
})->name('lista-marcas');

route::get('/detalhes-marcas/{marcas}',
function(Marca $marcas){
   return view('detalhes-marcas', compact('marcas'));
})->name('detalhes-marcas');

Route::get('/lista-blogs', function () {
    $blogs = Blog::all();
    return view('lista-blogs', compact('blogs'));
})->name('lista-blogs');

route::get('/detalhes-blogs/{blogs}',
function(Blog $blogs){
   return view('detalhes-blogs', compact('blogs'));
})->name('detalhes-blogs');

// route::get('/quem/{quemsomos}',
// function(Filme $filme){
//    return view('detalhes-filmes', compact('filme'));
// })->name('detalhes-filme');