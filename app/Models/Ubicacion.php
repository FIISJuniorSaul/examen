<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table = 'ubicacion';
    protected $fillable = ['departamento','provincia', 'distrito', 'referencia', 'incidente_id'];
    public function Incidente()
    {
        return $this->belongsTo('App\Models\Incidente', 'incidente_id');
    }

}
