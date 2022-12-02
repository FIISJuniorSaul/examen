<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutaOrigen extends Model
{

    use HasFactory;
    protected $table = 'ruta_origenes';
    protected $fillable = ['departamento_origen', 'provincia_origen', 'vehiculos_id', 'distritoOrigen_id'];
    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo','vehiculos_id');
    }
    public function distrito_origen()
    {
        return $this->belongsTo('App\Models\Distrito','distritoOrigen_id');
    }
}
