<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutaDestino extends Model
{
    use HasFactory;
    protected $table = 'ruta_destinos';
    protected $fillable = ['departamento_destino', 'provincia_destino', 'distrito_destino', 'vehiculos_id', 'distrito_id'];
    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo','vehiculos_id');
    }
    public function distrito()
    {
        return $this->belongsTo('App\Models\Distrito','distrito_id');
    }
}
