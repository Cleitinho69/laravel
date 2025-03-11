<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\inertia;

class verificarController extends Controller
{
    public function verificar(Request $request){
        
        if($request->numero > 0){
            $mensagem = "Esse número é positivo";
        }else{
            $mensagem = "Esse número é negativo";
        }
        
        $dados = [
            'mensagem'=>$mensagem
        ];

        return Inertia::render('Welcome',$dados);
    }
}
