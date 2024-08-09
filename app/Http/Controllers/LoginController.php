<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    public function loginStore(Request $request)
    {
        $url = env('URL_API_LOGIN');
        $response = Http::post($url,[
            'CoD'      => $request->CoD,
            'password' => $request->password
        ]);
        $responseData = $response->json();
    
        if($response->successful()){
            return redirect()->route('perfil.Inicio');
        }else{
            $errors = $responseData['errors'] ??[];

            return back()->withErrors($errors)->with('messag', $responseData['message']);
        }
    }
}
