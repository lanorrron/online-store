<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'name' => 'Rojo'
        ]);

        Color::create([
            'name' => 'Amarillo'
        ]);

        Color::create([
            'name' => 'Negro'
        ]);

        Color::create([
            'name' => 'Blanco'
        ]);
    }
}
