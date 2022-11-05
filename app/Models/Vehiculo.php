<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo';
    protected $fillable = ['placa', 'marca', 'modelo','capacidad_carga', 'consumo_gasolina'];
    public function Carga()
    {
        return $this->hasOne('App\Models\Carga');
    }
    public function User()
    {
        return $this->hasOne('App\Models\User');
    }
}

