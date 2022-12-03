<?php

namespace App\Http\Controllers;
use App\Models\Persona;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    public function index(){
        $personas=Persona::get();
        return view('admin.configuracion.usuario.index', compact('personas'));
    }
    public function create() {
        return view('admin.configuracion.usuario.crear');
     }
     public function edit($id)
    {
        try {
            $persona = Persona::get();
            return view('admin.operaciones.usuario.edit', compact('persona'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $persona = Persona::findOrfail($id);
            $persona->fill($request->all());
            $persona->save();
            return redirect()->route('user.index')->with('success', 'La persona ha sido actualizado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function store(Request $request){
        try {
            $persona = new Persona($request->all());
            $persona->save();
            return redirect()->route('user.index')->with('success', 'El usuario ha sido creado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }

    }
    public function destroy($id){
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('user.index')->with('success', 'El usuario ha sido eliminado correctamente.');
    }
}
