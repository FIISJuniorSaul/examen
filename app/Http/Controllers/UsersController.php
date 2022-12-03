<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Persona;
use App\Models\Role;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->buscar;
        $criterio = $request->criterio;

        if ($buscar == '') {
            $personas = User::join('personas', 'users.id', '=', 'personas.id')
                ->join('roles', 'users.idrol', '=', 'roles.id')
                ->select('personas.id', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.telefono', 'personas.correo', 'personas.dni', 'users.usuario', 'users.condicion', 'users.idrol', 'roles.nombre as rol')
                ->orderBy('personas.id', 'desc')->paginate(10);
        } else {
            $personas = User::join('personas', 'users.id', '=', 'personas.id')
                ->join('roles', 'users.idrol', '=', 'roles.id')
                ->select('personas.id', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.telefono', 'personas.correo', 'personas.dni', 'users.usuario', 'users.condicion', 'users.idrol', 'roles.nombre as rol')
                ->where('personas.' . $criterio, 'like', '%' . $buscar . '%')
                ->orderBy('id', 'desc')->paginate(10);
        }

        return view('admin.configuracion.usuario.index', compact('personas'));


    }
    public function create() {
        $roles = Role::all();
        return view('admin.configuracion.usuario.crear', compact('roles'));
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

            $user = new User();
            $user->id = $persona->id;
            $user->idrol = $request->idrol;
            $user->usuario = $request->usuario;
            $user->password = bcrypt($request->password);
            $user->condicion = '1';
            $user->save();

            DB::commit();
            return redirect()->route('usuario.index');
        } catch (Exception $e) {
            DB::rollBack();
        }

    }
    public function edit($id)
    {
        $persona = Persona::find($id);
        $user = User::find($id);

        return view('admin.configuracion.usuario.edit', compact('persona','user'));
    }

    public function update(Request $request)
    {
        try {
            DB::beginTransaction();

            $user = User::findOrFail($request->id);
            $persona = Persona::findOrFail($user->id);
            $persona->dni = $request->dni;
            $persona->nombre = $request->nombre;
            $persona->apellido_paterno = $request->apellido_paterno;
            $persona->apellido_materno = $request->apellido_materno;
            $persona->telefono = $request->telefono;
            $persona->correo = $request->correo;
            $persona->save();

            $user->usuario = $request->usuario;
            $user->password = bcrypt($request->password);
            $user->condicion = '1';
            $user->idrol = $request->idrol;
            $user->save();

            $user->fill($request->all());
            $user->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
        return redirect()->route('user.index')->with('success','El usuario se actualizo con exito');
    }

    public function desactivar(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->condicion = '0';
        $user->save();
    }

    public function activar(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->condicion = '1';
        $user->save();
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('usuario.index')->with('success', 'El usuario ha sido eliminado correctamente.');
    }
}
