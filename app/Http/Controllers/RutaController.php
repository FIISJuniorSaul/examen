<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index(){
        $rutas=Ruta::get();

        return view('admin.operaciones.rutas.index', compact('rutas'));
    }
    public function create() {
        return view('admin.operaciones.rutas.createRutas');
     }

    public function store(Request $request){
        $rutas = new Ruta($request->all());
        $rutas->save();
        return redirect()->route('rutas.index')->with('success', 'La ruta ha sido creado correctamente.');
    }
    public function destroy($id){
        $rutas = Ruta::findOrFail($id);
        $rutas->delete();
        return redirect()->route('rutas.index')->with('success', 'La ruta ha sido eliminado correctamente.');
    }
}
