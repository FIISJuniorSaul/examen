<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteNatural extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    protected $fillable = ['codigo'];

    public function persona(){
        return $this->belongsTo('App\Models\Persona');
    }
}
