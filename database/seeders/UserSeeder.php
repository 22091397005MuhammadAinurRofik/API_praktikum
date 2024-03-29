<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'coba',
            'password' => bcrypt('password'),
            'name' => 'coba',
            'token' => 'coba_token',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
