<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Consejo;


class ConsejoRoleUserSeeder extends Seeder
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

            [
                'name' => 'Oscar',
                'cedula' => 123456,
                'email' => 'Oscars@gmail.com',
                'password' => bcrypt(123456),
            ],
        ];

        $consejos = [
            [
                "nombre" => "Consejo Administrativo",
                "descripcion" => "Aqui nos robamos los reales"

            ],
        ];

        $usuarioPresidente = [
            [
                'name' => 'Gabriel',
                'cedula' => 19804364,
                'email' => 'gabriel@gmail.com',
                'password' => bcrypt(19804364),
            ],
        ];

        $usuarioSecretario = [
            [
                'name' => 'Alexei',
                'cedula' => 27219581,
                'email' => 'alexei@gmail.com',
                'password' => bcrypt(27219581),
            ],
        ];

        $usuarioConsejero = [

            [
                'name' => 'Osdalys',
                'cedula' => 27077239,
                'email' => 'osdalys@gmail.com',
                'password' => bcrypt(27077239),
            ],

            [
                'name' => 'Victor',
                'cedula' => 27506373,
                'email' => 'Oscars@gmail.com',
                'password' => bcrypt(27506373),
            ],

            [
                'name' => 'Fatima',
                'cedula' => 27334025,
                'email' => 'fatima@gmail.com',
                'password' => bcrypt(27334025),
            ],

            [
                'name' => 'Osmary',
                'cedula' => 27506367,
                'email' => 'osmary@gmail.com',
                'password' => bcrypt(27506367),
            ],

            [
                'name' => 'Carlos',
                'cedula' => 24559475,
                'email' => 'carlos@gmail.com',
                'password' => bcrypt(24559475)
            ],

            [
                'name' => 'eric',
                'cedula' => 15689584,
                'email' => 'eric@gmail.com',
                'password' => bcrypt(15689584),
            ],

            [
                'name' => 'Genesis',
                'cedula' =>  26138853,
                'email' => 'genesis@gmail.com',
                'password' => bcrypt(26138853),
            ],

            [
                'name' => 'Roxana',
                'cedula' => 25935452,
                'email' => 'roxana@gmail.com',
                'password' => bcrypt(25395452)
            ]
        ];

        $indicesUsersDB;
        $indicesConsejosDB;
        $$indiceUserDB = 1;
        $indiceConsejoDB = 1;

        foreach ($usuariosMaster as $user) {

            User::create(
                $user
            );

            $indicesUsersDB[$user['name']] = $indiceUserDB;

            $indiceUserDB++;
        }

        foreach ($consejos as $consejo) {

            Consejo::create(
                $consejo
            );

            $indicesConsejosDB[$consejo['nombre']] = $indiceConsejoDB;

            $indiceConsejoDB++;
        }

        User::find($indicesUsersDB[$usuariosMaster[0]['name']])->roles()->attach(1);


        /*  foreach ($usuariosMaster as $rol => $permisos) {
          
            $rol=User::find($indicesRolesDB[$rl]);

            foreach ($permisos as $permiso) {

                $rol->permisos()->attach($indicesPermisosDB[$permiso]);
                
               
            }
           
        } */
    }
}
