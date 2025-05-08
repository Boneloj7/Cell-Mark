<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Modelo; // Importar la clase correctamente

class ModeloSeeder extends Seeder
{
    public function run()
    {
        Modelo::insert([
            ['nombre' => 'Galaxy A12', 'marca' => 'Samsung'],
            ['nombre' => 'iPhone 13', 'marca' => 'Apple'],
            ['nombre' => 'Redmi Note 11', 'marca' => 'Xiaomi']
        ]);
    }
}