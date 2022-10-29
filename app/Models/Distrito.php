<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    protected $table = 'distritos';
    protected $fillable = [ 'nombre', 'ubigeo', 'activo','provincia_id'];

    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia');
    }
}
