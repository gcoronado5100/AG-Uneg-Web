<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consejo;

class consejoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        consejo::create([
            'id' => 1,
            'titulo' => 'Transporte',
            'descripción' => 'Este consejo se encarga de gestionar y organizar todo lo referencte
             al area de transporte de la UNEG',
        ]);

        consejo::create([
            'id' => 2,
            'titulo' => 'Presupuesto',
            'descripcion' => 'Este consejo se encarga de gestionar y organizar todo lo referencte
             al area salarial de la UNEG',
        ]);

        consejo::create([
            'id' => 3,
            'titulo' => 'Capacitación académica profesores',
            'descripcion' => 'Este consejo se encarga de gestionar y organizar todo lo referencte
             al area de capacitación para el desarrollo de las nuevas habilidades en el hámbito
              académico de los profesores de la UNEG',
        ]);
    }
}
