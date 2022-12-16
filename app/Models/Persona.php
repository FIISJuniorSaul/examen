<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = ['codigo','dni', 'nombre', 'apellido_paterno', 'apellido_materno','telefono','correo'];

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
    public function clienteNatural()
    {
        return $this->hasOne('App\Models\ClienteNatural');
    }
    public function clienteJuridico()
    {
        return $this->hasOne('App\Models\ClienteJuridico');
    }
}
