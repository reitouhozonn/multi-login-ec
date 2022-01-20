<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 6; $i++) {

            DB::table('t_stocks')->insert([
                [
                    'product_id' => 1,
                    'type' => 1,
                    'quantity' => $i,
                ]
            ]);
        }
    }
}
