<?php

use App\Http\Controllers\Admin\RegisteredAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContadorController;
use App\Http\Controllers\ContadorDataController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\graficas;
use App\Http\Controllers\GraficasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SimuladorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Monolog\Handler\RotatingFileHandler;

Route::get('/', function () {
    return view('Home');
});


//login admin
Route::get('/loginAdmin', [ContadorController::class, 'loginAdmin'])->name('loginAdmin');

//LOGIN USUARIO
Route::get('/login', [ContadorController::class, 'login'])->name('login.index');


//registro usuario
Route::get('/registro', [RegistroController::class, 'registroIndex'])->name('registroIndex');
Route::get('/registro/Create', [RegistroController::class, 'registroCreate'])->name('registroCreate');
Route::post('/registro', [RegistroController::class, 'registroStore'])->name('registroStore');



//registro admin
Route::get('/registro/Admin', [ContadorController::class, 'registroAdmin'])->name('registroAdmin');



Route::get('/user', [ContadorController::class, 'UserIndex'])->name('perfil.Inicio');

// Ruta para ContadorDataController
Route::get('/user/contador', [ContadorDataController::class, 'ContadorIndex'])->name('perfil.Contador');
Route::post('/contador', [ContadorDataController::class, 'ContadorStore'])->name('Contador.store');

// Rutas para ContadorController
Route::get('/user/contador/agregar', [ContadorController::class, 'AgregarIndex'])->name('perfil.Agregar');
Route::get('/user/contador/mostrar', [ContadorController::class, 'MostrarShow'])->name('perfil.Mostrar');
Route::get('/user/contador/eliminar', [ContadorController::class, 'DeleteContador'])->name('perfil.Eliminar');
Route::get('/user/contador/editar', [ContadorController::class, 'EditarContador'])->name('perfil.Editar');


//conexion base de datos presupuesto
Route::post('/presupuesto', [PresupuestoController::class, 'presupuestoStore'])->name('presupuesto.store');

//conexion base de datos simulador
Route::get('/simulador', [SimuladorController::class, 'simuladorIndex'])->name('simulador.index');
Route::post('/simulador', [SimuladorController::class, 'simuladorStore'])->name('simulador.store');

//conexion base de datos login
Route::post('/login', [LoginController::class, 'loginStore'])->name('login.store');


Route::get('/user/daños', [ContadorController::class, 'DañosIndex'])->name('perfil.Daños');


Route::get('/user/historial', [ContadorController::class, 'HistorialIndex'])->name('perfil.Historial');
Route::get('/user/historialAnual', [ContadorController::class, 'HistorialAnualIndex'])->name('perfil.HistorialAnual');

Route::get('/user/presupuesto', [ContadorController::class, 'PresupuestoIndex'])->name('perfil.Presupuesto');





//Ruta administrador Crud
Route::get('/user/adiministrador', [CrudController::class, 'index'])->name('Admin.crud');

Route::get('/graficas',[GraficasController::class, 'GraficasCreate'])->name('perfil.graficas');
Route::get('/graficas',[GraficasController::class, 'GraficasIndex'])->name('perfil.graficas');
