<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    
    public function home(){
        $usuario = 'Ezequiel';
        $perfil = 'Estudante de TI';
        $empresa = 'Etec';
        $numero = 10;

        $dados = [
            'usuario'=>$usuario,
            'perfil'=>$perfil,
            'empresa'=>$empresa,
            'numero'=>$numero
        ];

        return Inertia::render('appTeste', $dados);
    }
}
