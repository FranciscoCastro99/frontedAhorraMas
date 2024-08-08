<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PresupuestoController extends Controller
{


    public function presupuestoStore(Request $request)
    {
        $url = env('URL_API_PRESUPUESTO');
        $response = Http::post($url, [
            'contador_id' => $request->contador_id,
            'servicio'    => $request->servicio,
            'valor_gasto' => $request->valor_gasto
        ]);

        return view('perfil.PresupuestoCalcular');
    }
}
