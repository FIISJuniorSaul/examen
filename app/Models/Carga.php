<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    use HasFactory;
    protected $table = 'cargas';
    protected $fillable = ['codigo','costo', 'descripcion', 'peso', 'vehiculos_id'];


    public function vehiculo()
    {
        return $this->belongsTo('App\Models\Vehiculo', 'vehiculos_id');
    }
    public function vutas()
    {
        return $this->hasOne('App\Models\Rutas');
    }
}
