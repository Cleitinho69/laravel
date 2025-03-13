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

        $dados = [
            'usuario'=>$usuario,
            'perfil'=>$perfil,
            'empresa'=>$empresa
        ];

        return Inertia::render('appTeste', $dados);
    }
}
