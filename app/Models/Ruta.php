<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;
    protected $table = 'rutas';
    protected $fillable = ['departamento_origen', 'provincia_origen', 'distrito_origen','departamento_destino', 'provincia_destino', 'distrito_destino'];
    public function user()
    {
        return $this->hasOne('App\Models\Ruta');
    }
}
