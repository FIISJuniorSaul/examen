<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use App\Models\Distrito;
use App\Models\RutaDestino;
use App\Models\RutaOrigen;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function index()
    {
        $rutas_destinos = RutaDestino::get();
        $rutas_origenes = RutaOrigen::get();
        return view('admin.operaciones.rutas.index', compact('rutas_destinos', 'rutas_origenes'));
    }
    public function create()
    {
        try {
            $vehiculos = Vehiculo::get();
            $distritos = Distrito::get();
            return view('admin.operaciones.rutas.createRutas', compact('vehiculos', 'distritos'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function edit_destino($id)
    {
        try {
            $carga = Carga::get();
            $ruta_destino = RutaDestino::findOrfail($id);
            return view('admin.operaciones.rutas.editDestino', compact('carga', 'ruta_destino'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function edit_origen($id)
    {
        try {
            $carga = Carga::get();
            $ruta_origen = RutaOrigen::findOrfail($id);
            return view('admin.operaciones.rutas.editOrigen', compact('carga', 'ruta_origen'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function update_destino(Request $request, $id)
    {
        try {
            $ruta_destino = RutaDestino::findOrfail($id);
            $ruta_destino->fill($request->all());
            $ruta_destino->save();
            return redirect()->route('ruta.index')->with('success', 'La carga ha sido actualizado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function update_origen(Request $request, $id)
    {
        try {
            $ruta_origen = RutaOrigen::findOrfail($id);
            $ruta_origen->fill($request->all());
            $ruta_origen->save();
            return redirect()->route('ruta.index')->with('success', 'La carga ha sido actualizado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function store(Request $request)
    {
        try {
            $rutas_destino = new RutaDestino($request->all());
            $rutas_origen = new RutaOrigen($request->all());
            $rutas_origen->save();
            $rutas_destino->save();
            return redirect()->route('ruta.index')->with('success', 'La ruta ha sido creado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }

    public function destroy($id)
    {
        $ruta_destino = RutaDestino::findOrFail($id);
        $ruta_origen = RutaOrigen::findOrFail($id);
        $ruta_origen->delete();
        $ruta_destino->delete();
        return redirect()->route('ruta.index')->with('success', 'La ruta ha sido eliminado correctamente.');
    }
}
