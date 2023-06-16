<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\equipos;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AltaEquiposController extends Controller
{
    public function altaEquipo(){
        return view('AltaEquipos');
    }
    public function store(Request $request)
    {
        $equipos = new equipos();
        $equipos->Nombre = $request->post('NomEquipo');
        $equipos->No_Jugadores = $request->post('NumJugadores');
        $equipos->Representante = $request->post('NomRepresentante');
        $equipos->Categoria = $request->post('inputState');
        $equipos->save();
        return back();
    }
}
