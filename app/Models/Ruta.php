<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;
    protected $table = 'rutas';
    protected $fillable = ['departamento_origen', 'provincia_origen', 'distrito_origen','departamento_destino', 'provincia_destino', 'distrito_destino'];
    public function Carga()
    {
        return $this->belongsTo('App\Models\Carga');
    }
}
