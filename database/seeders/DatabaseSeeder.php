<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\UserSeeder;
use Database\Seeders\AgendaSeeder;
use Database\Seeders\PuntosSeeder;
use Database\Seeders\ConsejoSeeder;
use Database\Seeders\EstadosSeeder;
use Database\Seeders\SoportesSeeder;
use Database\Seeders\PermisoRoleSeeder;
use Database\Seeders\ConsejoPuntosSeeder;
use Database\Seeders\ConsejoRoleUserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ConsejoSeeder::class,
            PermisoRoleSeeder::class,

            ConsejoRoleUserSeeder::class,

            AgendaSeeder::class,
            EstadosSeeder::class,

            PuntosSeeder::class,
            SoportesSeeder::class,

            ConsejoPuntosSeeder::class,
        ]);
    }
}
