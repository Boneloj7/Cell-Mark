<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Bodega;
use App\Models\Celular;

class BodegaSeeder extends Seeder
{
    public function run(): void
    {
        $celulares = Celular::all();

        foreach ($celulares as $celular) {
            Bodega::create([
                'celular_id' => $celular->id,
                'cantidad' => rand(5, 50)
            ]);
        }
    }
}
