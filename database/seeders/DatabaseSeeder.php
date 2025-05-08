<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            RolSeeder::class,        // 👈 Añade esto primero
            ModeloSeeder::class,
            CelularSeeder::class,
            BodegaSeeder::class,
        ]);
    }
}
