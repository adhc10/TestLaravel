<?php

namespace App\Http\Controllers;
use App\Models\Prueba;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function PartidaNueva(Request $request){        
        $partida = new Prueba;
        $partida->IdJugador1=$request->Nombre;
        $partida->IdJugador2="Invitado";
        $partida->save();
        $Ultimo = $partida->IdPartida;
        return view('partida',compact('Ultimo'));
    }
}
