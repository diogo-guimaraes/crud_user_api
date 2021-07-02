<?php

namespace App\Http\Controllers;

use illuminate\http\Request;

class HomeController extends Controller
{
    public function index()
    {
          //dd('Olá Mundo'); 
          $nome = 'JORGE';
          $id = 1;
          return view('home', ['nome' =>$nome, 'id' => $id]);
    }
}