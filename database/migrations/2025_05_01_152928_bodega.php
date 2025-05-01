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
        Schema::create('bodega', function (Blueprint $table) {
            $table->id('id_bodega');
            $table->unsignedBigInteger('id_celular');
            $table->integer('cantidad')->default(0);
            $table->string('ubicacion', 100)->nullable();
            $table->timestamp('fecha_ingreso')->useCurrent();
            $table->text('observaciones')->nullable();
            
            // Foreign key relationship
            $table->foreign('id_celular')
                ->references('id_celular')
                ->on('celulares')
                ->onDelete('cascade');
            
            // Index
            $table->index('id_celular', 'idx_bodega_celular');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodega');
    }
};
