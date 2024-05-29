<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultController extends Controller
{
    //
    public function resultado(Request $request)
    {


        /*    $dados = $request->all();

            $IUPM =  $dados['IUPM'];
            $DMCM = $dados['DMCM'];
        */
        $IUPM = $request->query('IUPM');
        $DMCM = $request->query('DMCM');
        $tipo = "em dias";
        $CálculoDiaOvulação = $DMCM - 14 + 1;

        //$CálculoPeríodoFértil = $IUPM-5; 
        $data1 = $IUPM;
        $data2 = date('Y-m-d');

        $timestamp1 = strtotime($data1);
        $timestamp2 = strtotime($data2);
        $diferencaSegundos = abs($timestamp1 - $timestamp2);
        $CálculoPeríodoFértil = $diferencaSegundos / (60 * 60 * 24);

        $PrimeiroDiaPeriodoFertil = $CálculoDiaOvulação - 5;

        $ÚltimoDiaPeriodoFertil = $CálculoDiaOvulação + 1;
        return view(
            'result',
            [
                'IUPM' => $IUPM,
                'DMCM' => $DMCM,
                'CálculoDiaOvulação' => $CálculoDiaOvulação,
                'Dias' => $CálculoPeríodoFértil,
                'PrimeiroDiaPeriodoFertil' => $PrimeiroDiaPeriodoFertil,
                'ÚltimoDiaPeriodoFertil' => $ÚltimoDiaPeriodoFertil
            ]
        );

    }
}
