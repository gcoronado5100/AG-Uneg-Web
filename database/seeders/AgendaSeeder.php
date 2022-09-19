<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Agenda;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        agenda::create([
            'id' => 1,
            'titulo' => 'Contrato transporte',
            'consejo_is' => 1,
            'fecha_apertura' =>  Carbon::parse('2022-08-30'),
            'fecha_cierre' => Carbon::parse('2022-09-07'),

        ]);

        agenda::create([
            'id' => 2,
            'titulo' => 'Presupuesto transporte',
            'consejo_is' => 2,
            'fecha_apertura' =>  Carbon::parse('2022-08-30'),
            'fecha_cierre' => Carbon::parse('2022-09-07'),

        ]);

        agenda::create([
            'id' => 3,
            'titulo' => 'Presupuesto administrativo',
            'consejo_is' => 2,
            'fecha_apertura' =>  Carbon::parse('2022-09-13'),
            'fecha_cierre' => Carbon::parse('2022-09-18'),

        ]);

        agenda::create([
            'id' => 4,
            'titulo' => 'Diplomados y postgrados disponibles',
            'consejo_is' => 3,
            'fecha_apertura' =>  Carbon::parse('2022-09-20'),
            'fecha_cierre' => Carbon::parse('2022-09-29'),

        ]);
    }
}
