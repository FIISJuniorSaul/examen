<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    use HasFactory;
    protected $table = 'cargas';
    protected $fillable = ['codigo','costo', 'descripcion', 'peso', 'vehiculos_id'];


    public function Vehiculo()
    {
        return $this->hasOne('App\Models\Vehiculo', 'vehiculo_id');
    }
    public function Rutas()
    {
        return $this->hasOne('App\Models\Rutas');
    }
}
