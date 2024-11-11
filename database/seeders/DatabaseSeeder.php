<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Sala;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i =1; $i < 7; $i++){
            Sala::factory()->create([
                'id' => $i,
                'nombre' => 'sala '. $i,
            ]);
        }
    }
}
