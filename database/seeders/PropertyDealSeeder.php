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
                'deal' => 'Aluguel',
                'created_at' => now()
            ],
            [
                'deal' => 'Venda',
                'created_at' => now()
            ],
        ]);
    }
}
