<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContadorDataController extends Controller
{
    public function contadorIndex(){
        $url = env('URL_SERVER_API');
        $response = Http::get($url. '/contador');
        $data = $response->json();
        return view('PREUBAS.contador', compact('data'));

    }

    public function contadorStore(Request $request)
    {
       
        $url = env('URL_SERVER_API');
        $response = Http::post($url. '/contador', [
            'nombre_contador'    => $request->nombre_contador,
            'num_contador'       => $request->num_contador, 
            'barrio'          => $request->barrio,
            'direccion' => $request->direccion,
            'estrato'       => $request->estrato,
            'categoria'   => $request->categoria,
            'tarifa_agua' => $request->tarifa_agua,
            'tarifa_alcantarillado' => $request->tarifa_alcantarillado,
            'ultimo_consumo' => $request->ultimo_consumo,
            'fecha_proximo_pago' => $request->fecha_proximo_pago,
        ]);

        return redirect()->route('Contador.index');
    }
}
