<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AltaEquiposController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('index.html', function () {
    return view('index');
});

Route::get('index2.html', function () {
    return view('index2');
});

Route::get('VistaEquiposDestacados', function () {
    return view('VistaEquposDestacados');
});

Route::get('VistaJugadoresDestacados', function () {
    return view('VistaJugadoresDestacados');
});

Route::get('VistaEstadisticas', function () {
    return view('VistaEstadisticas');
});

Route::get('VistaJugadas', function () {
    return view('VistaJugadas');
});

Route::get('Login', function () {
    return view('Login');
});

Route::get('RegistroAdmin', function () {
    return view('RegistroAdmin');
});

Route::get('AltaEquipos', function () {
    return view('AltaEquipos');
});

//login
Route::post('/Login',[LoginController::class,'login'])->name('Nombre','Contraseña');

//registro
Route::post('/AltaEquipos', [AltaEquiposController::class, 'store'])->name('NomEquipo','NomRepresentante','NumJugadores','inputState');