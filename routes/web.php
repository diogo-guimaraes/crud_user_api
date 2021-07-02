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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
     return view('home');
});

route::get('/produtos', function() {
    return view('produtos');
});

route::get('/produtos/{nomeProduto}/comentario/{id}', function($nomeProduto, $id) {
    echo "Comentario sobre produto: ".$id.", do produto: ".$nomeProduto;
});

// www.site.com.br/produtos
