<?php

namespace Database\Seeders;

use App\Models\ConsejoRoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsejoRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ConsejoRoleUser::create([
            'consejo_id' => 1,
            'role_id' => 2,
            'user_id' => 3,
        ]);


        ConsejoRoleUser::create([
            'consejo_id' => 1,
            'role_id' => 3,
            'user_id' => 6,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 1,
            'role_id' => 4,
            'user_id' => 5,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 1,
            'role_id' => 4,
            'user_id' => 8,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 1,
            'role_id' => 4,
            'user_id' => 9,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 6,
            'role_id' => 2,
            'user_id' => 2,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 6,
            'role_id' => 2,
            'user_id' => 2,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 6,
            'role_id' => 3,
            'user_id' => 7,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 6,
            'role_id' => 4,
            'user_id' => 11,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 6,
            'role_id' => 4,
            'user_id' => 3,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 6,
            'role_id' => 4,
            'user_id' => 10,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 6,
            'role_id' => 4,
            'user_id' => 1,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 2,
            'role_id' => 2,
            'user_id' => 4,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 2,
            'role_id' => 3,
            'user_id' => 5,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 2,
            'role_id' => 4,
            'user_id' => 2,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 2,
            'role_id' => 4,
            'user_id' => 10,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 2,
            'role_id' => 4,
            'user_id' => 8,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 2,
            'role_id' => 4,
            'user_id' => 9,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 7,
            'role_id' => 2,
            'user_id' => 6,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 7,
            'role_id' => 3,
            'user_id' => 11,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 7,
            'role_id' => 4,
            'user_id' => 2,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 7,
            'role_id' => 4,
            'user_id' => 5,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 7,
            'role_id' => 4,
            'user_id' => 8,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 7,
            'role_id' => 4,
            'user_id' => 9,
        ]);

        ConsejoRoleUser::create([
            'consejo_id' => 7,
            'role_id' => 4,
            'user_id' => 7,
        ]);
    }
}
