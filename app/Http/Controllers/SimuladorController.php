<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SimuladorController extends Controller
{

    public function simuladorIndex(){
        return view('perfil.PresupuestoCalcular');
    }

    public function simuladorStore(Request $request)
    {
        $url = env('URL_API');
        $response = Http::post('http://127.0.0.1:8000/api/simulador',[
            'presupuesto_id' => $request->presupuesto_id,
            'alcantarillado' => $request->alcantarillado,
            'cargo_fijo'     => $request->cargo_fijo
        ]);
        return view('perfil.PresupuestoCalcular');
    }
}
