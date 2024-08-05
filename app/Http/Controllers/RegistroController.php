<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegistroController extends Controller
{
    
    //prueba de comunicacion con el server
    
    public function registroIndex(){
        $url = env('URL_SERVER_API');
        $response = Http::get($url. '/register');
        $data = $response->json();
        return view('PREUBAS.conexion', compact('data'));
    }

    public function registroCreate(){
        return view('perfil.register');
    }

    public function registroStore(Request $request){
        $url = env('URL_SERVER_API');
        $response = Http::post($url. '/register', [
            'name'           => $request->name,
            'lastName'       => $request->lastName, 
            'email'          => $request->email,
            'identification' => $request->identification,
            'password'       => $request->password
        ]);

        return redirect()->route('registroIndex');
    }

}
