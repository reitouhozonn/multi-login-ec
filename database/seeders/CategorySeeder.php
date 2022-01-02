<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {

            DB::table('primary_categories')->insert([
                [
                    'name' => 'prymary_' . $i,
                    'sort_order' => $i,
                ]
            ]);
        }

        for ($i = 1; $i < 10; $i++) {

            DB::table('secondary_categories')->insert([
                [
                    'name' => 'secondary_' . $i,
                    'sort_order' => $i,
                    'primary_category_id' => $i,
                ]
            ]);
        }
    }
}
