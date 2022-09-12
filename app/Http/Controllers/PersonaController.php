<?php

namespace App\Http\Controllers;
use App\Models\Persona;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    public function index(){
        $personas=Persona::get();

        return view('admin.Configuracion.usuario.index', compact('personas'));
    }
    public function create() {
        return view('admin.Configuracion.usuario.crear');
     }

    public function store(Request $request){
        /*$persona = new Persona();
        $persona->dni = Input::get('dni');
        $persona->nombre = Input::get('nombre');
        $persona->apellido_paterno = Input::get('apellido_paterno');
        $persona->apellido_materno = Input::get('apellido_materno');
        $persona->save();*/
        $persona = new Persona($request->all());
        $persona->save();

        return redirect()->route('user.index')->with('success', 'El usuario ha sido creado correctamente.');
    }
    public function destroy($id){
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('user.index')->with('success', 'El usuario ha sido eliminado correctamente.');
    }
}
