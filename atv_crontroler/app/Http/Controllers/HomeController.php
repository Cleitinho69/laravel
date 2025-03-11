<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home(){
        $usuario = 'Ypcilon';
        $perfil = 'gerente';
        $empresa = 'Etec';
        $numero = 10;

        $dados = [
            'usuario'=>$usuario,
            'perfil'=>$perfil,
            'empresa'=>$empresa,
            'numero'=>$numero
        ];

        return view('home', $dados);
    }
}
