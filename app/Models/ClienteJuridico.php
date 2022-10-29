<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteJuridico extends Model
{
    use HasFactory;
    protected $table = 'cliente_empresa';
    protected $fillable = ['txtruc', 'txtrazon_social', 'txtestado', 'txtdireccion','txtdepartamento','txtprovincia','txtdistrito'];

    # por modificar
    public function user()
    {
        return $this->hasMany('App\Models\Ruta');
    }

}
