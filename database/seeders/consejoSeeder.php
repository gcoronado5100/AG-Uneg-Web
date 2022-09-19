<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consejo;

class ConsejoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consejo::create(
        [
            'id' => 1,
            'consejo' => 'Consejo Universitario',
            'descripcion' => 'Es la autoridad suprema de la Universidad y ejerce las funciones
            de gobierno universitario por órgano del Rector, los Vicerrectores y el Secretario,
            conforme a sus respectiva atribuciones',
        ],

        [
            'id' => 2,
            'consejo' => 'Consejo Académico',
            'descripcion' => 'es la autoridad académica de la Universidad, órgano asesor del
            Rector y tiene entre sus tareas la de conceptuar ante el Consejo Superior, sobre
            la creación, modificación o supresión de unidades académicas',
        ],

        [
            'id' => 3,
            'consejo' => 'Consejo Administrativo',
            'descripcion' => 'Órgano colegiado que dirige la marcha de una empresa,
            supervisando y guiando la actuación de la dirección',
        ],

        [
            'id' => 4,
            'consejo' => 'Consejo de Investigación y Postgrado',
            'descripcion' => 'Es un órgano de co-gobierno, especializado en lo relacionado con
            la investigación, los estudios de postgrado, la producción y los servicio
            especializados',
        ],

        [
            'id' => 5,
            'consejo' => 'Consejo Departamental',
            'descripcion' => 'tiene capacidad de autoconvocarse, a propuesta del tercio de sus
            miembros, para formular proyectos, elaborar programas, emitir dictámenes o presentar
            recomendaciones, cuyo estudio es obligatorio para el Gobierno Departamental',
        ],

        [
            'id' => 6,
            'titulo' => 'Consejo de Transporte',
            'descripción' => 'Este consejo se encarga de gestionar y organizar todo lo referencte
             al area de transporte de la UNEG',
        ],

        [
            'id' => 7,
            'titulo' => 'Consejo de Presupuesto',
            'descripcion' => 'Este consejo se encarga de gestionar y organizar todo lo referencte
             al area salarial de la UNEG',
        ],

        [
            'id' => 8,
            'titulo' => 'Consejo de Capacitación Académica Docente',
            'descripcion' => 'Este consejo se encarga de gestionar y organizar todo lo referencte
            al area de capacitación para el desarrollo de las nuevas habilidades en el hámbito
            académico de los profesores de la UNEG',
        ]);
    }
}
