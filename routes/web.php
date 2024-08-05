<?php

use App\Http\Controllers\Admin\RegisteredAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContadorController;
use App\Http\Controllers\ContadorDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Monolog\Handler\RotatingFileHandler;

Route::get('/', function () {
    return view('Home');
});




//login admin
Route::get('/loginAdmin', [ContadorController::class, 'loginAdmin'])->name('loginAdmin');

//LOGIN USUARIO 
Route::get('/login', [ContadorController::class, 'login'])->name('login');


//registro usuario
Route::get('/registro', [RegistroController::class, 'registroIndex'])->name('registroIndex');
Route::get('/registro/Create', [RegistroController::class, 'registroCreate'])->name('registroCreate');
Route::post('/registro', [RegistroController::class, 'registroStore'])->name('registroStore');



//registro admin 
Route::get('/registro/Admin', [ContadorController::class, 'registroAdmin'])->name('registroAdmin');



Route::get('/user', [ContadorController::class, 'UserIndex'])->name('perfil.Inicio');

Route::get('/user/contador', [ContadorController::class, 'ContadorIndex'])->name('perfil.Contador');
Route::get('/user/contador/agregar', [ContadorController::class, 'AgregarIndex'])->name('perfil.Agregar');
Route::get('/user/contador/mostrar', [ContadorController::class, 'MostrarShow'])->name('perfil.Mostrar');

//conexion con la base de datos
Route::get('/contador', [ContadorDataController::class, 'ContadorIndex'])->name('Contador.index');
Route::post('/contador', [ContadorDataController::class, 'ContadorStore'])->name('Contador.store');


Route::get('/user/daños', [ContadorController::class, 'DañosIndex'])->name('perfil.Daños');


Route::get('/user/historial', [ContadorController::class, 'HistorialIndex'])->name('perfil.Historial');

Route::get('/user/presupuesto', [ContadorController::class, 'PresupuestoIndex'])->name('perfil.Presupuesto');



