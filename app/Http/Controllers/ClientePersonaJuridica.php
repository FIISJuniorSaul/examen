<?php

namespace App\Http\Controllers;

use App\Models\ClienteJuridico;
use Illuminate\Http\Request;
use App\Models\Ruta;


class ClientePersonaJuridica extends Controller
{
    public function index(){
        $clientesj=ClienteJuridico::get();

        return view('admin.operaciones.clientes.index', compact('clientesj'));
    }
    public function create() {
        $rutas = Ruta::get();
        return view('admin.operaciones.clientes.crear', compact('rutas'));
     }

    public function store(Request $request){
        $clientesj = new ClienteJuridico($request->all());
        $clientesj->save();

        return redirect()->route('clientes.index')->with('success', 'El usuario ha sido creado correctamente.');
    }
    public function destroy($id){
        $clientesj = ClienteJuridico::findOrFail($id);
        $clientesj->delete();
        return redirect()->route('clientes.index')->with('success', 'El usuario ha sido eliminado correctamente.');
    }


}
