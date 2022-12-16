<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use App\Models\Ubicacion;
use App\Models\User;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    public function index()
    {
        $ubicacion = Ubicacion::get();

        return view('admin.operaciones.ubicacion.index', compact('ubicacion'));
    }
    public function create()
    {
        try {
            $incidente = Incidente::get();
            $ubicacion = Ubicacion::get();
            return view('admin.operaciones.ubicacion.create', compact('ubicacion', 'incidente'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function edit($id)
    {
        try {
            $incidente = Incidente::get();
            $ubicacion = Ubicacion::findOrfail($id);
            return view('admin.operaciones.ubicacion.edit', compact('incidente', 'ubicacion'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $ubicacion = Ubicacion::findOrfail($id);
            $ubicacion->fill($request->all());
            $ubicacion->save();
            return redirect()->route('ubicacion.index')->with('success', 'La ubicacion ha sido actualizado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function store(Request $request)
    {
        try {
            $ubicacion = new Ubicacion($request->all());
            $ubicacion->save();
            return redirect()->route('ubicacion.index')->with('success', 'La ubicacion ha sido creado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function destroy($id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->delete();
        return redirect()->route('ubicacion.index')->with('success', 'La ubicacion ha sido eliminado correctamente.');
    }
}
