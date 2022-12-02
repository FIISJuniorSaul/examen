<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutaDestino extends Model
{
    use HasFactory;
    protected $table = 'ruta_destinos';
    protected $fillable = ['departamento_destino', 'provincia_destino', 'vehiculos_id', 'distritoDestino_id'];
    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo','vehiculos_id');
    }
    public function distrito_destino()
    {
        return $this->belongsTo('App\Models\Distrito','distritoDestino_id');
    }
}
