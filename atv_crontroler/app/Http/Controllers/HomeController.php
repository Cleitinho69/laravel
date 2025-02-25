<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home(){
        $usuario = 'Ypcilon';
        $perfil = 'gerente';
        $empresa = 'Etec';

        $dados = [
            'usuario'=>$usuario,
            'perfil'=>$perfil,
            'empresa'=>$empresa
        ];

        return view('home', $dados);
    }
}
