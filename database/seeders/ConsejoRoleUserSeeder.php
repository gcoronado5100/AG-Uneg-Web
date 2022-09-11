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
        $usuariosMaster=[
            [
            "name"=>"Israel David Villarroel Moreno",
            "email"=>"israeldavid2.0@gmail.com",
            'cedula' => 28031021,
            'password' => bcrypt(28031021),
            
            ], 
        ];

        $consejos=[
            [
                "nombre"=>"Consejo Administrativo",
                "descripcion"=>"Aqui nos robamos los reales"
                
            ], 
        ];

        $indicesUsersDB;
        $indicesConsejosDB;

        $indiceUserDB=1;
        $indiceConsejoDB=1;

        foreach ($usuariosMaster as $user) {

            User::create(
                $user
            );

            $indicesUsersDB[$user['name']]=$indiceUserDB;
            
            $indiceUserDB++;           
        }

        foreach ($consejos as $consejo) {

            Consejo::create(
                $consejo
            );

            $indicesConsejosDB[$consejo['nombre']]=$indiceConsejoDB;
            
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
