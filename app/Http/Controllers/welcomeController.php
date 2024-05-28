<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function formulario(Request $request){
        
    /*    $dados = $request->all();

        $IUPM =  $dados['IUPM'];
        $DMCM = $dados['DMCM'];
    */
    $IUPM = $request->query('IUPM');
    $DMCM = $request->query('DMCM');

        return view('welcome', ['IUPM'=>$IUPM, 'DMCM'=>$DMCM]);
    }
}
