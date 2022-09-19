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
        estado::create([
            'id' => 1,
            'estado' => 'Creada'
        ]);

        estado::create([
            'id' => 2,
            'estado' => 'Activa'
        ]);

        estado::create([
            'id' => 3,
            'estado' => 'Finalizada'
        ]);
    }
}
