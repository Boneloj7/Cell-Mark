<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('celulares', function (Blueprint $table) {
            $table->id('id_celular');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_modelo');
            $table->string('titulo', 150);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->enum('estado_celular', ['como nuevo', 'buen estado', 'aceptable', 'con detalles']);
            $table->integer('almacenamiento');
            $table->integer('ram')->nullable();
            $table->string('color', 50)->nullable();
            $table->string('imei', 20)->nullable();
            $table->boolean('tiene_cargador')->default(false);
            $table->boolean('tiene_caja')->default(false);
            $table->boolean('tiene_audifonos')->default(false);
            $table->integer('bateria_porcentaje')->nullable();
            $table->timestamp('fecha_publicacion')->useCurrent();
            $table->enum('estado_anuncio', ['publicado', 'vendido', 'pausado', 'eliminado'])->default('publicado');
            $table->boolean('destacado')->default(false);
            
            // Foreign key relationship
            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('usuarios')
                ->onDelete('cascade');
            
            // Index
            $table->index('id_usuario', 'idx_celulares_usuario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celulares');
    }
};