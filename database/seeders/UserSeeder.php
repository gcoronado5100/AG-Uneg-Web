<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Consejo;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuariosMaster = [
            [
                "name" => "Israel David Villarroel Moreno",
                "email" => "israeldavid2.0@gmail.com",
                'cedula' => 28031021,
                'genero' => 'Masculino',
                'password' => bcrypt(28031021),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/28031021.jpg',

            ],[
                "name" => "Alejandro Esteban Marcus Martinez",
                "email" => "amarcus.tareas@yahoo.com.ve",
                'cedula' => 13837512,
                'genero' => 'Masculino',
                'password' => bcrypt(13837512),
                "fecha_nacimiento"=>'1971-04-05',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',

            ],

        ];


        $usuariosPresidente = [
            [
                'name' => 'Gabriel Coronado',
                'cedula' => 19804364,
                'email' => 'gabriel@gmail.com',
                'genero' => 'Masculino',
                'password' => bcrypt(19804364),
                "fecha_nacimiento"=>'1991-01-1',
                "url_foto_perfil"=>'/storage/perfiles/19804364.jpg',

            ],
        ];

        $usuariosSecretario = [
            [
                'name' => 'Alexei Hernandez',
                'cedula' => 27219581,
                'email' => 'alexei@gmail.com',
                'genero' => 'Masculino',
                'password' => bcrypt(27219581),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],
        ];

        $usuariosConsejero = [

            [
                'name' => 'Osdalys Gomez',
                'cedula' => 27077239,
                'email' => 'osdalys@gmail.com',
                'genero' => 'Femenino',
                'password' => bcrypt(27077239),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],

            [
                'name' => 'Victor Bolivar',
                'cedula' => 27506373,
                'email' => 'Oscars@gmail.com',
                'genero' => 'Masculino',
                'password' => bcrypt(27506373),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],

            [
                'name' => 'Fatima Ospina',
                'cedula' => 27334025,
                'email' => 'fatima@gmail.com',
                'genero' => 'Femenino',
                'password' => bcrypt(27334025),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],

            [
                'name' => 'Osmary Barriga',
                'cedula' => 27506367,
                'email' => 'osmary@gmail.com',
                'genero' => 'Femenino',
                'password' => bcrypt(27506367),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],

            [
                'name' => 'Carlos Brito',
                'cedula' => 24559475,
                'email' => 'carlos@gmail.com',
                'genero' => 'Masculino',
                'password' => bcrypt(24559475),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],

            [
                'name' => 'Eric Romero',
                'cedula' => 15689584,
                'email' => 'eric@gmail.com',
                'genero' => 'Masculino',
                'password' => bcrypt(15689584),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],

            [
                'name' => 'Genesis Sanchez',
                'cedula' =>  26138853,
                'email' => 'genesis@gmail.com',
                'genero' => 'Femenino',
                'password' => bcrypt(26138853),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ],

            [
                'name' => 'Roxana Salazar',
                'cedula' => 25935452,
                'email' => 'roxana@gmail.com',
                'genero' => 'Femenino',
                'password' => bcrypt(25395452),
                "fecha_nacimiento"=>'2000-03-18',
                "url_foto_perfil"=>'/storage/perfiles/perfil_defecto.jpg',


            ]
        ];
        $users=array_merge(
            $usuariosMaster,
            $usuariosPresidente,
            $usuariosSecretario,
            $usuariosConsejero
        );

        //Creacion de usuarios 
        foreach ($users as $user) {

            User::create(
                $user
            );
        }


    }
}
