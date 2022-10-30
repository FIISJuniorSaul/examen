<?php

namespace App\Http\Controllers;

use App\Models\ClienteJuridico;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;
use Illuminate\Http\Request;

class ClienteJuridicoController extends Controller
{
    //
    public function index(){
        $clientesju=ClienteJuridico::get();
       // return ['clientes'=>$clientesju];
        return view('admin.operaciones.clientes.index', compact('clientesju'));
    }
    public function create() {
        return view('admin.operaciones.clientes.crear');
     }

    public function store(Request $request){
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

            $juridico = new ClienteJuridico();
            $juridico->id = $persona->id;
            $juridico->codigo = $request->codigo;
            $juridico->ruc = $request->ruc;
            $juridico->razon_social = $request->razon_social;
            $juridico->estado = $request->estado;
            $juridico->direccion = $request->direccion;
            $juridico->departamento = $request->departamento;
            $juridico->provincia = $request->provincia;
            $juridico->distrito = $request->distrito;
            $juridico->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
    public function destroy($id){
        $clientesju = ClienteJuridico::findOrFail($id);
        $clientesju->delete();
        return redirect()->route('clientes.index')->with('success', 'El usuario ha sido eliminado correctamente.');
    }

}
