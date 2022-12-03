<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteNatural extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = ['codigo','id'];

    public function carga(){
        return $this->hasMany('App\Models\Carga');
    }
    public function persona(){
        return $this->belongsTo('App\Models\Persona', 'id');
    }

}
