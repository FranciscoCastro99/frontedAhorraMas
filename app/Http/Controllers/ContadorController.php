<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContadorController extends Controller
{
    public function __invoke(){
        return view('Home');
    }

    public function UserIndex(){
        return view('perfil.inicio');
    }

    // public function ContadorIndex(){
    //     return view('perfil.Contador');
    // }


    public function DeleteContador(){
        
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
        return view('perfil.EliminarContador', ['contadores' => $data]);
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        // Manejo de errores
        return response()->json(['error' => $e->getMessage()], 500);
    }
    }

    public function EditarContador(){
        return view('perfil.EditarContador');
    }


    public function AgregarIndex(){
        return view('perfil.AgregarContador');
    }

    public function MostrarShow(){
        return view('perfil.MostrarContador');
    }

    public function HistorialIndex(){
        return view('perfil.Historial');
    }
    public function HistorialAnualIndex(){
        return view('perfil.HistorialAnual');
    }
    public function HistorialMensualIndex(){
        return view('perfil.HistorialMensual');
    }

    public function PresupuestoIndex(){
        return view('perfil.Presupuesto');
    }

    public function DañosIndex(){
        return view('perfil.Daños');
    }

    public function loginAdmin(){
        return view('Admin.loginAdmin');
    }

    public function login(){
        return view('perfil.login');
    }


    public function registro(){
        return view('perfil.register');
    }

    public function registroAdmin(){
        return view('Admin.register-admin');
    }

}
