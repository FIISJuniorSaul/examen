<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteJuridico extends Model
{
    use HasFactory;
    protected $table = 'cliente_empresa';
    protected $fillable = ['codigo','ruc', 'razon_social', 'estado', 'direccion','departamento','provincia','distrito'];

    public function persona()
    {
        return $this->belongsTo('App\Models\Persona');
    }
}
