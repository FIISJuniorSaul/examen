<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $table = 'provincias';
    protected $fillable = ['nombre','ubigeo', 'activo', 'departamento_id'];
    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento', 'departamento_id');
    }
    public function distrito()
    {
        return $this->hasMany('App\Models\Distrito');
    }
}
