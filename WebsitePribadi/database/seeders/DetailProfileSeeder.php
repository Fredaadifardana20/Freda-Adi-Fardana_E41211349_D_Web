<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data detail_profile
        DB::table('detail_profile')->insert(
            [
                'name' => 'Freda Adi Fardana',
                'address' => 'Jember',
                'ttl' => '2002-08-20',
                'no_telp' => '08512345678'
            ]
        );
    }
}
