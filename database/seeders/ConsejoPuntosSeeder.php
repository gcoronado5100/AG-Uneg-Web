<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConsejoPunto;

class ConsejoPuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConsejoPunto::create([
            'id' => 1,
            'consejo_id' => 7,
            'punto_id' => 1,
        ]);

        ConsejoPunto::create([
            'id' => 2,
            'consejo_id' => 3,
            'punto_id' => 1,
        ]);
    }
}
