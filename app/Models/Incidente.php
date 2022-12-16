<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    use HasFactory;
    protected $table = 'incidente';
    protected $fillable = ['descripcion', 'estado', 'valoracion','user_id'];
    public function Ubicacion()
    {
        return $this->hasMany('App\Models\Ubicacion');
    }
    public function User()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
