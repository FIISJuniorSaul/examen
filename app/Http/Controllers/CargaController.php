<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use App\Models\ClienteNatural;
use App\Models\Vehiculo;
use Exception;
use Illuminate\Http\Request;

class CargaController extends Controller
{
    //
    public function index()
    {
        $cargas = Carga::get();

        return view('admin.operaciones.cargas.index', compact('cargas'));
    }
    public function create()
    {
        $cliente = ClienteNatural::get();
        $vehiculos = Vehiculo::get();
        return view('admin.operaciones.cargas.create', compact('vehiculos', 'cliente'));
    }
    public function edit($id)
    {
        $cliente = ClienteNatural::get();
        $vehiculo = Vehiculo::get();
        $carga = Carga::findOrfail($id);
        return view('admin.operaciones.cargas.edit', compact('vehiculo', 'carga', 'cliente'));
    }
    public function update(Request $request, $id)
    {
        $carga = Carga::findOrfail($id);
        $carga->fill($request->all());
        $carga->save();
        return redirect()->route('carga.index')->with('success', 'La carga ha sido actualizado correctamente.');
    }
    public function store(Request $request)
    {
        try {
            $cargas = new Carga($request->all());
            $cargas->save();
            return redirect()->route('carga.index')->with('success', 'La carga ha sido creado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function destroy($id)
    {
        $cargas = Carga::findOrFail($id);
        $cargas->delete();
        return redirect()->route('carga.index')->with('success', 'La carga ha sido eliminado correctamente.');
    }
}
