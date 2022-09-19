<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Punto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* punto::create([
            'id' => 1,
            'titulo' => 'Inicio del nuevo periodo 2002-II',
            'descripcion' => 'Organizar los pendientes no concluidos del periodo académicos
             anterior',
            'acuerdo_instrucciones' => ' 
             1.-Expresar sus preguntas luego de exponer todos el contenido. 
             2.-Pedir permiso para tomar la palabra.
             3.-La decisión final se toma por votación mayoritaria',
            'agenda_id' => 5,
            'fecha_ultima_actualizacion' => Carbon::parse('2022-09-27'),

        ]);*/
    }
}
