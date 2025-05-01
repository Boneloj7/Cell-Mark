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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id('id_reporte');
            $table->unsignedBigInteger('id_usuario_reportador');
            $table->enum('tipo_reporte', ['usuario', 'anuncio', 'mensaje']);
            $table->unsignedBigInteger('id_elemento_reportado');
            $table->text('motivo');
            $table->timestamp('fecha_reporte')->useCurrent();
            $table->enum('estado', ['pendiente', 'en_revision', 'resuelto', 'rechazado'])->default('pendiente');
            $table->unsignedBigInteger('id_usuario_admin_resolucion')->nullable();
            $table->timestamp('fecha_resolucion')->nullable();
            $table->text('comentarios_resolucion')->nullable();
            
            // Foreign key relationships
            $table->foreign('id_usuario_reportador')
                ->references('id_usuario')
                ->on('usuarios');
                
            $table->foreign('id_usuario_admin_resolucion')
                ->references('id_usuario')
                ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};