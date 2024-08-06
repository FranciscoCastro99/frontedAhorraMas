<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PresupuestoController extends Controller
{


    public function presupuestoStore(Request $request)
    {
        $url = env('URL_SERVER_API');
        $response = Http::post($url. '/presupuesto', [
            'contador_id' => $request->contador_id,
            'servicio'    => $request->servicio,
            'valor_gasto' => $request->valor_gasto
        ]);

        return view('perfil.PresupuestoCalcular');
    }
}
