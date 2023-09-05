<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Rota chamando controller
Route::get('/jogos', [JogosController::class, 'index']);

//Rota que vai mostrar quando der erro
Route::fallback(function(){
    return "Erro ao localizar rota";
});

//Rota chamando view diretamente (sem controller, sem parâmetro)
//Route::view('/jogos','jogos');

//Rota chamando texto
// Route::get('/texto', function(){
//     return "Retornando texto na rota";
// });

//Rota com parâmetro estático
//Route::view('/jogos', 'jogos', ['name' => 'GTA']);

//Rota com parâmetro dinâmico obrigatório
// Route::get('jogos/{name}', function($name){
//     return view('jogos', ['nomeJogo' => $name]);
// });

//Rota com parâmetro dinâmico opcional
// Route::get('jogos/{name?}', function($name = null){
//     return view('jogos', ['nomeJogo' => $name]);
// });

//Rota com parâmetro dinâmico opcional (somente texto)
// Route::get('jogos/{name?}', function($name = null){
//     return view('jogos', ['nomeJogo' => $name]);
// })->where('name', '[A-Za-z]+');

//Rota com parâmetro dinâmico opcional (somente números)
// Route::get('jogos/{id?}', function($id = null){
//     return view('jogos', ['idJogo' => $id]);
// })->where('id', '[0-9]+');

//Rota com parâmetros dinâmicos opcionais
// Route::get('jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos', ['idJogo' => $id, 'nomeJogo' => $name]);
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);