<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContadorDataController extends Controller
{
    public function ContadorIndex()
{
    try {
        $client = new \GuzzleHttp\Client();
        $response = $client->get(env('URL_API_CONTADOR'));
        $data = json_decode($response->getBody(), true);

        // Verifica si los datos están bien
        // dd($data);
        
        $datosPredeterminados = [
            ['id' => 1, 'nombre_contador' => 'Contador 1', 'consumos' => [['consumo_m3' => 100, 'consumo_pesos' => 5000]]],
            ['id' => 2, 'nombre_contador' => 'Contador 2', 'consumos' => [['consumo_m3' => 150, 'consumo_pesos' => 7500]]],
            ['id' => 3, 'nombre_contador' => 'Contador 3', 'consumos' => [['consumo_m3' => 200, 'consumo_pesos' => 10000]]],
        ];
        return view('perfil.Contador', ['contadores' => $data]);
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        // Manejo de errores
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    public function contadorStore(Request $request)
    {
       
        $url = env('URL_API_CONTADOR');
    
        $response = Http::post($url, [
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

        // Obtener datos JSON de la respuesta
        $responseData = $response->json();

        // Verificar si la respuesta es exitosa
        if ($response->successful()) {
            return redirect()->route('perfil.Contador')->with('success', $responseData['message']);
        } else {
            // Manejar errores cuando la respuesta contiene errores
            $errors = [];
            if (isset($responseData['errors']) && is_array($responseData['errors'])) {
                // Flatten errors if they are in array of arrays
                foreach ($responseData['errors'] as $error) {
                    if (is_array($error)) {
                        $errors = array_merge($errors, $error);
                    } else {
                        $errors[] = $error;
                    }
                }
            } else {
                // Default error handling if 'errors' key does not exist
                $errors[] = 'Hubo un error al procesar la solicitud.';
            }

            // Asegurarse de que 'message' esté definido en la respuesta de la API
            $message = $responseData['message'] ?? 'Hubo un error al crear el contador.';

            return back()->withErrors($errors)->with('message', $message);
        }

    }
}
