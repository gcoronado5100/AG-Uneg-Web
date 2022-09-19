<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\Permiso;

class PermisoRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuario (sin roles)
        //editar su informacion personal excepto su rol

        //consejero
        //ve puntos de la agenda
        //ve agendas
        //agregar puntos agregar punto y agregar relacion entre punto y agenda

        //secretario
        //mismo consejero
        //agregar editar agendas  agregar editar agenda y agregar relacion entre consejo y agenda
        //agregar elimina consejero agregar usuario agregar eliminar relacion entre usuario rol y consejo
        //<----nota aqui puede agregar usuarios nuevos al sistema o asignarlos si ya existen

        //Presidente
        //mismo secretario
        //edita consejo
        //agregar secretario dice de los que pertenecen al consejo
        //pero creo que deberia de ser como hace el secretario

        //master
        //mismo presidente
        //agrega o elimina rol para un usuario
        //independientemente de si pertenece o no a su consejo
        //agrega eliminar consejos
        //agregar o eliminar usuarios
        $permisosParticulares = [
            "master" =>
            [
                'asignar rol',
                'desasignar rol',
                'agregar usuario',
                'eliminar usuario',
                'agregar consejo',
                'eliminar consejo'
            ],
            "presidente" =>
            [
                'agregar secretario',
                'editar consejo'
            ],
            "secretario" =>
            [
                'agregar agenda',
                'editar agenda',
                'agregar consejero',
                'eliminar consejero'
            ],
            "consejero" =>
            [
                'agregar punto',
            ],


        ];

        $rolesYPermisos = [
            "master" => array_merge(
                $permisosParticulares['master'],
                $permisosParticulares['presidente'],
                $permisosParticulares['secretario'],
                $permisosParticulares['consejero']
            ),
            "presidente" => array_merge(
                $permisosParticulares['presidente'],
                $permisosParticulares['secretario']
            ),
            "secretario" => array_merge(
                $permisosParticulares['secretario'],
                $permisosParticulares['consejero']
            ),
            "consejero" => array_merge(
                $permisosParticulares['consejero']
            ),
        ];


        $indicesRolesDB;
        $indicesPermisosDB;

        $indiceRolDB = 1;
        $indicePermisoDB = 1;

        foreach ($permisosParticulares as $rol => $permisos) {

            Role::create(
                ['nombre' => $rol]
            );

            $indicesRolesDB[$rol] = $indiceRolDB;

            foreach ($permisos as $permiso) {

                Permiso::create(
                    ["nombre" => $permiso]
                );

                $indicesPermisosDB[$permiso] = $indicePermisoDB;

                $indicePermisoDB++;
            }

            $indiceRolDB++;
        }


        foreach ($rolesYPermisos as $rol => $permisos) {

            $rol = Role::find($indicesRolesDB[$rol]);

            foreach ($permisos as $permiso) {

                $rol->permisos()->attach($indicesPermisosDB[$permiso]);
            }
        }
    }
}
