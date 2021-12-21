<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 100; $i++) {

            DB::table('owners')->insert([
                [
                    'name' => 'test' . $i,
                    'email' => 'test' . $i . '@example.com',
                    'password' => Hash::make('123'),
                    'created_at' => '2021/01/01 11:11:11'
                ]
            ]);
        }
    }
}
