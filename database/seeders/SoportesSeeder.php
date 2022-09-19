<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Soporte;

class SoportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soporte::create([
            'id' => 1,
            'nombre' => 'Acta de consejo',
            'punto_id' => 1,
        ]);

        Soporte::create([
            'id' => 2,
            'nombre' => 'Resolución',
            'punto_id' => 1,
        ]);

        Soporte::create([
            'id' => 3,
            'nombre' => 'Informe',
            'punto_id' => 1,
        ]);

        Soporte::create([
            'id' => 4,
            'nombre' => 'Reporte',
            'punto_id' => 1,
        ]);
    }
}
