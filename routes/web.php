<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {

    $nome = "Pedrov";
    $idade = 22;

    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});
*/

Route::get('/', function () {

    return view('login');
});


Route::get('/principal', function () {

    //$nome = "Pedro de Souza";
    //$ano = 2022;
    
   // return view('pagina-principal', ['nome' => $nome, 'ano' => $ano]);
   return view('pagina-principal');
});