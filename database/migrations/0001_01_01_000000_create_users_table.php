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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre', 100);
            $table->string('apellidos', 100);
            $table->string('identificacion', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('telefono', 20)->nullable();
            $table->string('password', 255);
            $table->string('direccion', 200)->nullable();
            $table->string('ciudad', 100)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('codigo_postal', 10)->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamp('ultima_conexion')->nullable();
            $table->boolean('es_administrador')->default(false);
            $table->enum('estado_cuenta', ['activo', 'inactivo', 'suspendido'])->default('activo');
            $table->unsignedBigInteger('id_rol')->nullable();
            
            // Foreign key relationship
            $table->foreign('id_rol')
                ->references('id_rol')
                ->on('roles');
                
            // Index
            $table->index('id_rol', 'idx_usuarios_rol');
        });
        
        // Insert default users
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Juan',
                'apellidos' => 'Pérez',
                'identificacion' => '12345678A',
                'email' => 'juanperez@email.com',
                'password' => bcrypt('password123'),
                'es_administrador' => 0,
                'estado_cuenta' => 'activo',
                'id_rol' => 1
            ],
            [
                'nombre' => 'Ana',
                'apellidos' => 'Gómez',
                'identificacion' => '87654321B',
                'email' => 'anagomez@email.com',
                'password' => bcrypt('password456'),
                'es_administrador' => 0,
                'estado_cuenta' => 'activo',
                'id_rol' => 2
            ],
            [
                'nombre' => 'Carlos',
                'apellidos' => 'López',
                'identificacion' => '11223344C',
                'email' => 'carloslopez@email.com',
                'password' => bcrypt('password789'),
                'es_administrador' => 0,
                'estado_cuenta' => 'activo',
                'id_rol' => 3
            ],
            [
                'nombre' => 'Marta',
                'apellidos' => 'Ruiz',
                'identificacion' => '55667788D',
                'email' => 'martaruiz@email.com',
                'password' => bcrypt('password101'),
                'es_administrador' => 0,
                'estado_cuenta' => 'activo',
                'id_rol' => 4
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};