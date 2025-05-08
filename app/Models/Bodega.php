<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $table = 'bodega';

    protected $fillable = ['celular_id', 'cantidad'];

    public function celular()
    {
        return $this->belongsTo(Celular::class);
    }
}