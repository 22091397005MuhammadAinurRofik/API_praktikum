<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'street' => 'coba',
            'city' => 'coba',
            'province' => 'coba',
            'country' => 'coba',
            'postal_code' => 'coba',
        ]);
    }
}
