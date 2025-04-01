<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class calcController extends Controller
{
    public function calc_peso(Request $request){
        
        $sex = $request->sex;
        $alt = $request->alt;

        if($sex == 'masculino'){
            $peso_ideal = (72.7*$alt)-58;
        }else{
            $peso_ideal = (62.1*$alt)-44.7;
        }

        return Inertia::render('result', [
            'peso_ideal' => $peso_ideal,
            'sexo' => $sex,
            'altura' => $alt
        ]);
    }
}
