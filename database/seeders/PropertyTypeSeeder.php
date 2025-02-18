<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_type')->insert([
            [
                'type' => 'Apartamento',
                'created_at' => now()
            ],
            [
                'type' => 'Casa',
                'created_at' => now()
            ],
            [
                'type' => 'Terreno',
                'created_at' => now()
            ],
        ]);
    }
}
