<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sala;
use Illuminate\Database\Seeder;
use App\Models\Silla;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $contadorSillas = 1;
        for ($i = 1; $i <= env('SALAS'); $i++) {
            Sala::factory()->create([
                'id' => $i,
                'nombre' => 'sala ' . $i,
                'descripcion' => 'descripcion de la sala ' . $i,
            ]);
            // create 5 sillas for each sala
            for ($j = 1; $j <= env('ASIENTOS'); $j++) {
                Silla::factory()->create([
                    'id' => $contadorSillas,
                    'ocupada' => false,
                    'sala_id' => $i,
                ]);
                $contadorSillas++;
            }
        }
    }
}
