<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculos=Vehiculo::get();

        return view('admin.operaciones.vehiculos.index', compact('vehiculos'));
    }
    public function create() {
        return view('admin.operaciones.vehiculos.create');
     }

    public function store(Request $request){
        $vehiculos = new Vehiculo($request->all());
        $vehiculos->save();
        return redirect()->route('vehiculos.index')->with('success', 'El vehiculo ha sido creado correctamente.');
    }
    public function destroy($id){
        $vehiculos = Vehiculo::findOrFail($id);
        $vehiculos->delete();
        return redirect()->route('vehiculos.index')->with('success', 'El vehiculo ha sido eliminado correctamente.');
    }

}
