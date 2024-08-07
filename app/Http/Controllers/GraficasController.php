<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficasController extends Controller
{
    public function GraficasIndex(){
        return view('perfil.graficas');
    }
    public function GraficasCreate(){
        return view('perfil.graficas');
    }
}
