<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyDealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property_deal')->insert([
            [
                'deal' => 'rent',
                'created_at' => now()
            ],
            [
                'deal' => 'sale',
                'created_at' => now()
            ],
            [
                'deal' => 'sold',
                'created_at' => now()
            ],
            [
                'deal' => 'rented',
                'created_at' => now()
            ],
        ]);
    }
}
