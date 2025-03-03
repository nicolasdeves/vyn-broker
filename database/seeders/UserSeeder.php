<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'username'      => 'margarida',
                'name'          => 'Margarida Corretora',
                'user_type_id'     => 2,
                'password_hash' => Hash::make('margarida'),
                'created_at' => now()
            ],
        ]);
    }
}
