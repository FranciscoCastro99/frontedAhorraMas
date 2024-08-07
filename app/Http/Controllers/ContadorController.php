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

    public function ContadorIndex(){
        return view('perfil.Contador');
    }


    public function DeleteContador(){
        return view('perfil.EliminarContador');
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
