<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $admin = \App\Models\User::factory(10)->create();
        $user = \App\Models\User::factory(10)->create();

        \App\Models\Consejo::factory(20)->create();

    }
}
