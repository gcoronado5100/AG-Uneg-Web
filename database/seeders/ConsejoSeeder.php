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
        Consejo::create([
            'id' => 2,
            'nombre' => ' Consejo de Transporte',
            'descripcion' => 'Este consejo se encarga de gestionar y organizar todo lo referente
             al area de transporte de la Universidad Nacional Experimental de Guayana',
        ]);

        Consejo::create([
            'id' => 3,
            'nombre' => 'Consejo de Presupuesto',
            'descripcion' => 'Este consejo se encarga de gestionar y organizar todo lo referente
             al area salarial de la Universidad Nacional Experimental de Guayana',
        ]);

        Consejo::create([
            'id' => 4,
            'nombre' => 'Consejo de Capacitación académica a profesores',
            'descripcion' => 'Este consejo se encarga de gestionar y organizar todo lo referencte
             al area de capacitación para el desarrollo de las nuevas habilidades en el hámbito
             académico de los profesores de la UNEG',
        ]);

        Consejo::create([
            'id' => 5,
            'nombre' => 'Consejo universitario',
            'descripcion' => ' Es la autoridad suprema de la Universidad y ejerce las funciones
            de gobierno universitario por órgano del Rector, los Vicerrectores y el Secretario,
            conforme a sus respectiva atribuciones.
            Expedir y vigilar el cumplimiento de las normas y disposiciones generales encaminadas
            a la mejor organización y funcionamiento técnico, docente y administrativo de la
            Universidad Nacional Experimental de Guayana',
        ]);

        Consejo::create([
            'id' => 6,
            'nombre' => 'Consejo Académico',
            'descripcion' => 'Es la autoridad académica de la Universidad, órgano asesor del
            Rector y tiene entre sus tareas la de conceptuar ante el Consejo Superior, sobre
            la creación, modificación o supresión de unidades académicas. 
            Decidir sobre el desarrollo académico de la Institución en lo relativo a docencia,
            programas académicos, investigación, extensión, bienestar universitario. También sobre
            otros asuntos académicos que no estén atribuidos a otra autoridad institucional.',
        ]);

        Consejo::create([
            'id' => 7,
            'nombre' => 'Consejo de Investigación y Postgrado',
            'descripcion' => 'El Consejo de Investigación y Postgrado es un órgano que forma 
             parte de la Vicerrectoría, con funciones estratégicas de análisis, evaluación y
             proposición de políticas e instrumentos, en los ámbitos de la Investigación y
             Creación Artística, Postgrado e Innovación.',
        ]);

        Consejo::create([
            'id' => 8,
            'nombre' => 'Consejo Departamental',
            'descripcion' => 'Son unidades organizativas funcionales cuya razón de ser es la 
             formación, desarrollo, evaluación y promoción del personal académico, a los fines 
             de aseurar la calidad y la pertenencia en los procesos medulares de Docencia, 
             Investigación y Extensión, así como la gestión académico-administrativa, 
             que demande el desarrollo de la Institución.',
        ]);
    }
}
