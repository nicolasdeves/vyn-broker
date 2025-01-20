<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_type')->insert([
            [
                'type' => 'admin',
                'created_at' => now()
            ],
            [
                'type' => 'broker',
                'created_at' => now()
            ],
        ]);
    }
}
