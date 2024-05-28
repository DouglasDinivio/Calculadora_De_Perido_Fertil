<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultController extends Controller
{
    //
   public function resultado(){
    $Nome = "Douglas";
    $sexo = "Masculino";

    $dados = [
        'usuario' => $Nome,
        'sexo' => $sexo
    ];
    

    return view('result', $dados);
   }
}
