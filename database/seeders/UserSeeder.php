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
                'password' => bcrypt(28031021),

            ],

        ];


        $usuariosPresidente = [
            [
                'name' => 'Gabriel Coronado',
                'cedula' => 19804364,
                'email' => 'gabriel@gmail.com',
                'password' => bcrypt(19804364),
            ],
        ];

        $usuariosSecretario = [
            [
                'name' => 'Alexei Hernandez',
                'cedula' => 27219581,
                'email' => 'alexei@gmail.com',
                'password' => bcrypt(27219581),
            ],
        ];

        $usuariosConsejero = [

            [
                'name' => 'Osdalys Gomez',
                'cedula' => 27077239,
                'email' => 'osdalys@gmail.com',
                'password' => bcrypt(27077239),
            ],

            [
                'name' => 'Victor Bolivar',
                'cedula' => 27506373,
                'email' => 'Oscars@gmail.com',
                'password' => bcrypt(27506373),
            ],

            [
                'name' => 'Fatima Ospina',
                'cedula' => 27334025,
                'email' => 'fatima@gmail.com',
                'password' => bcrypt(27334025),
            ],

            [
                'name' => 'Osmary Barriga',
                'cedula' => 27506367,
                'email' => 'osmary@gmail.com',
                'password' => bcrypt(27506367),
            ],

            [
                'name' => 'Carlos Brito',
                'cedula' => 24559475,
                'email' => 'carlos@gmail.com',
                'password' => bcrypt(24559475)
            ],

            [
                'name' => 'Eric Romero',
                'cedula' => 15689584,
                'email' => 'eric@gmail.com',
                'password' => bcrypt(15689584),
            ],

            [
                'name' => 'Genesis Sanchez',
                'cedula' =>  26138853,
                'email' => 'genesis@gmail.com',
                'password' => bcrypt(26138853),
            ],

            [
                'name' => 'Roxana Salazar',
                'cedula' => 25935452,
                'email' => 'roxana@gmail.com',
                'password' => bcrypt(25395452)
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
