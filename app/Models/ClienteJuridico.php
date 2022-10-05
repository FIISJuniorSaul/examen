<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteJuridico extends Model
{
    use HasFactory;
    protected $table = 'cliente_empresa';
    protected $fillable = ['ruc', 'razon_social', 'estado', 'direccion','departamento','provincia','distrito'];

    # por modificar
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

}
