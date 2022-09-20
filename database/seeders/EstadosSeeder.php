<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'id' => 1,
            'estado' => 'Aprobado',
        ]);

        Estado::create([
            'id' => 2,
            'estado' => 'Diferido',
        ]);

        Estado::create([
            'id' => 3,
            'estado' => 'Diferido virtual',
        ]);

        Estado::create([
            'id' => 4,
            'estado' => 'Rechazado',
        ]);

        Estado::create([
            'id' => 5,
            'estado' => 'Retirado',
        ]);
    }
}
