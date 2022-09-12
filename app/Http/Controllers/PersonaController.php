<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    public function obtenerPersonas(){
        $personas=Persona::get();

        return view('admin.Configuracion.usuario.index', compact('personas'));
    }
}
