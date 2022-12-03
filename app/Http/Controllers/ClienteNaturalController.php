<?php

namespace App\Http\Controllers;

use App\Models\ClienteNatural;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteNaturalController extends Controller
{
    //
    public function index()
    {
        $clientesn = ClienteNatural::get();

        return view('admin.operaciones.clientes.indexClienteNatural', compact('clientesn'));
    }
    public function create()
    {
        return view('admin.operaciones.clientes.crearPersonaNatural');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $persona = new Persona();
            $persona->dni = $request->dni;
            $persona->nombre = $request->nombre;
            $persona->apellido_paterno = $request->apellido_paterno;
            $persona->apellido_materno = $request->apellido_materno;
            $persona->telefono = $request->telefono;
            $persona->correo = $request->correo;
            $persona->save();

            $natural = new ClienteNatural();
            $natural->id = $persona->id;
            $natural->codigo = $request->codigo;
            $natural->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
    public function edit($id)
    {
        try {
            $persona = Persona::get();
            $clientenatural = ClienteNatural::findOrfail($id);
            return view('admin.operaciones.clientes.editn', compact( 'persona','clientenatural'));
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $clientesn = ClienteNatural::findOrfail($id);
            $clientesn->fill($request->all());
            $clientesn->save();
            return redirect()->route('clientes.indexClienteNatural')->with('success', 'El usuario ha sido actualizado correctamente.');
        } catch (\Exception $ex) {
            return back()->with('warning', 'ocurrio un error');
        }
    }
    public function destroy($id)
    {
        $clientesn = ClienteNatural::findOrFail($id);
        $persona = Persona::findOrFail($id);
        $clientesn->delete();
        $persona->delete();
        return redirect()->route('clientes.indexClienteNatural')->with('success', 'El usuario ha sido eliminado correctamente.');
    }
}
