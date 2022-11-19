<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutaOrigen extends Model
{

    use HasFactory;
    protected $table = 'ruta_origenes';
    protected $fillable = ['departamento_origen', 'provincia_origen', 'distrito_origen', 'vehiculos_id', 'distrito_id'];
    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo','vehiculos_id');
    }
    public function distrito()
    {
        return $this->belongsTo('App\Models\Distrito','distrito_id');
    }
}
