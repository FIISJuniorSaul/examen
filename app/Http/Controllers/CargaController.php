<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use Illuminate\Http\Request;

class CargaController extends Controller
{
    //
    public function index(){
        $cargas=Carga::get();

        return view('admin.operaciones.cargas.index', compact('cargas'));
    }
    public function create() {
        return view('admin.operaciones.cargas.create');
     }

    public function store(Request $request){
        $cargas = new Carga($request->all());
        $cargas->save();
        return redirect()->route('cargas.index')->with('success', 'La carga ha sido creado correctamente.');
    }
    public function destroy($id){
        $cargas = Carga::findOrFail($id);
        $cargas->delete();
        return redirect()->route('cargas.index')->with('success', 'La carga ha sido eliminado correctamente.');
    }
}
