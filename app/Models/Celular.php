<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    protected $table = 'celular';

    protected $fillable = ['modelo_id', 'precio'];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function bodegas()
    {
        return $this->hasMany(Bodega::class);
    }
}