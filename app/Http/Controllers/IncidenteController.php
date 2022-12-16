<?php

namespace App\Http\Controllers;

use App\Models\Incidente;
use App\Models\User;
use Illuminate\Http\Request;

class IncidenteController extends Controller
{

    public function index()
    {
        $incidente = Incidente::get();
        return view('admin.operaciones.incidente.index', compact('incidente'));
    }
    public function create()
    {
        try {
            $usuarios = User::get();
            $incidente = Incidente::get();
            return view('admin.operaciones.incidente.create', compact('usuarios', 'incidente'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }

    public function store(Request $request)
    {
        try {
            $incidente = new Incidente($request->all());
            $incidente->save();
            return redirect()->route('incidente.index')->with('success', 'El incidente ha sido creado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function edit($id)
    {
        try {
            $usuarios = User::get();
            $incidente = Incidente::findOrfail($id);
            return view('admin.operaciones.incidente.edit', compact('usuarios', 'incidente'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $incidente = Incidente::findOrfail($id);
            $incidente->fill($request->all());
            $incidente->save();
            return redirect()->route('incidente.index')->with('success', 'El incidente ha sido actualizado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }

    }
    public function destroy($id)
    {
        $incidente = Incidente::findOrFail($id);
        $incidente->delete();
        return redirect()->route('incidente.index')->with('success', 'El incidente ha sido eliminado correctamente.');
    }
}
