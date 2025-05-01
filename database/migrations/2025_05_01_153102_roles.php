<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id_rol');
            $table->string('nombre', 50)->unique();
            $table->text('descripcion')->nullable();
        });
        
        // Insert the default roles
        DB::table('roles')->insert([
            [
                'nombre' => 'admin',
                'descripcion' => 'Administrador con control total del sistema, gestión de usuarios, reportes y contenido.'
            ],
            [
                'nombre' => 'vendedor',
                'descripcion' => 'Usuario autorizado para publicar y gestionar anuncios de celulares.'
            ],
            [
                'nombre' => 'comprador',
                'descripcion' => 'Usuario que puede buscar, contactar y comprar celulares.'
            ],
            [
                'nombre' => 'moderador',
                'descripcion' => 'Usuario con permisos para revisar y resolver reportes, gestionar contenido inapropiado.'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};