<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            // [
            //     'name' => 'Estrela',
            //     'created_at' => now()
            // ],
            [
                'name' => 'Lajeado',
                'created_at' => now()
            ],
            [
                'name' => 'Bom Retiro do Sul',
                'created_at' => now()
            ],
            [
                'name' => 'Fazenda Vilanova',
                'created_at' => now()
            ],
        ]);
    }
}
