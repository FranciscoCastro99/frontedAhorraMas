<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SimuladorController extends Controller
{

    public function simuladorIndex(){
        return view('PREUBAS.simulador');
    }

    public function simuladorStore(Request $request)
    {
        $url = env('URL_SERVER_API');
        $response = Http::post($url. '/simulador',[
            'presupuesto_id' => $request->presupuesto_id,
            'alcantarillado' => $request->alcantarillado,
            'cargo_fijo'     => $request->cargo_fijo
        ]);
        return "presupuesto creado";
    }
}
