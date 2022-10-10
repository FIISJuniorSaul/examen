<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    use HasFactory;
    protected $table = 'rutas';
    protected $fillable = ['departamento', 'provincia', 'distrito'];
    public function user()
    {
        return $this->hasOne('App\Models\Ruta');
    }
}
