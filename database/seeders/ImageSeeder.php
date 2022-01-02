<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {

            DB::table('images')->insert([
                [
                    'owner_id' => $i,
                    'filename' => 'public/images/dummy-200x200.png',
                    'title' => 'dummy' . $i,
                    'created_at' => '2021/01/01 11:11:11'
                ]
            ]);
        }
    }
}
