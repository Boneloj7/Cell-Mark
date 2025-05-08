<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('bodega', function (Blueprint $table) {
            $table->id(); // reemplaza 'id_bodega'
            $table->foreignId('celular_id')->constrained('celular')->onDelete('cascade');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('bodega');
    }
};
