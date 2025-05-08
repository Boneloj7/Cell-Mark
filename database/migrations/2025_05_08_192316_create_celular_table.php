<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('celular', function (Blueprint $table) {
            $table->id(); // Clave primaria estándar de Laravel
            $table->foreignId('modelo_id')->constrained('modelos')->onDelete('cascade'); // Relación con 'modelos'
            $table->decimal('precio', 10, 2); // Precio del celular
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down(): void {
        Schema::dropIfExists('celular');
    }
};
