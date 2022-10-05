<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteNatural extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = ['dni', 'nombre', 'apellido_paterno', 'apellido_materno','telefono','correo'];

    # por modificar
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }

}
