<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Celular;
use App\Models\Modelo;

class CelularSeeder extends Seeder
{
    public function run(): void
    {
        $modelos = Modelo::all();

        foreach ($modelos as $modelo) {
            Celular::create([
                'modelo_id' => $modelo->id,
                'precio' => rand(150, 900)
            ]);
        }
    }
}
