<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = ['nombre', 'email', 'role_id']; // Asegúrate de incluir 'role_id'

    /**
     * Relación: un usuario pertenece a un rol.
     */
    public function rol()
    {
        return $this->belongsTo(Rol::class, 'role_id');
    }

    /**
     * Opcional: helper para verificar el nombre del rol.
     */
    public function tieneRol($nombre)
    {
        return $this->rol && $this->rol->nombre === $nombre;
    }

    // Si en el futuro el usuario tiene celulares u otros
    // public function celulares() {
    //     return $this->hasMany(Celular::class);
    // }
}
