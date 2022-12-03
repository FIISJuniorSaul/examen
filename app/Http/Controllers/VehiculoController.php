<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::get();

        return view('admin.operaciones.vehiculos.index', compact('vehiculos'));
    }
    public function create()
    {
        $usuarios = User::get();
        return view('admin.operaciones.vehiculos.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        try {
            $vehiculos = new Vehiculo($request->all());
            $vehiculos->save();
            return redirect()->route('vehiculo.index')->with('success', 'El vehiculo ha sido creado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function edit($id)
    {
        $chofer = User::get();
        $vehiculo = Vehiculo::findOrfail($id);
        return view('admin.operaciones.vehiculos.edit', compact('vehiculo', 'chofer'));
    }
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::findOrfail($id);
        $vehiculo->fill($request->all());
        $vehiculo->save();
        return redirect()->route('vehiculo.index')->with('success', 'El vehiculo ha sido actualizado correctamente.');
    }
    public function destroy($id)
    {
        $vehiculos = Vehiculo::findOrFail($id);
        $vehiculos->delete();
        return redirect()->route('vehiculo.index')->with('success', 'El vehiculo ha sido eliminado correctamente.');
    }
}
