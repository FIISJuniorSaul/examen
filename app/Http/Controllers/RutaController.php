<?php

namespace App\Http\Controllers;


use App\Models\Distrito;
use App\Models\Ruta;
use App\Models\RutaDestino;
use App\Models\RutaOrigen;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index(){
        $rutas_destinos=RutaDestino::get();
        $rutas_origenes=RutaOrigen::get();
        return view('admin.operaciones.rutas.index', compact('rutas_destinos', 'rutas_origenes'));
    }
    public function create() {
        $vehiculos= Vehiculo::get();
        $distritos= Distrito::get();
        return view('admin.operaciones.rutas.createRutas',compact('vehiculos', 'distritos'));
     }

    public function store(Request $request){
        $rutas_destino = new RutaDestino($request->all());
        $rutas_origen = new RutaOrigen($request->all());
        $rutas_origen->save();
        $rutas_destino->save();
        return redirect()->route('ruta.index')->with('success', 'La ruta ha sido creado correctamente.');
    }
    public function destroy($id){
        $rutas = RutaDestino::findOrFail($id);
        $rutas->delete();
        return redirect()->route('ruta.index')->with('success', 'La ruta ha sido eliminado correctamente.');
    }
}
