<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estado;

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
        ],

        [
            'id' => 2,
            'estado' => 'Diferido',
        ],

        [
            'id' => 3,
            'estado' => 'Diferido virtual',
        ],

        [
            'id' => 4,
            'estado' => 'Rechazado',
        ],

        [
            'id' => 5,
            'estado' => 'Retirado',
        ]);
    }
}
