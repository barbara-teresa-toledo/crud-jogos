<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
       //dd('ola mundo');
       $nome = 'barb';
       return view('jogos', ['nome' => $nome]);
    }
}
