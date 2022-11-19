<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = 'departamentos';
    protected $fillable = ['nombre','ubigeo', 'activo'];
    public function provincia()
    {
        return $this->hasMany('App\Models\Provincia');
    }
}
