<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MelhorEnvioController extends Controller
{
    public function autorizacaoAPI(){
        return [
            'codigo' => 22,
            'nome'   => 'API',
            'preco'  => 22.90,
        ];
    }
}
