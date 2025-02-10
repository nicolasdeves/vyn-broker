<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeighborhoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('neighborhood')->insert([
            [
                'name' => 'Centro',
                'created_at' => now()
            ],
            [
                'name' => 'Universitário',
                'created_at' => now()
            ],
            [
                'name' => 'Florestal',
                'created_at' => now()
            ],
        ]);
    }
}
