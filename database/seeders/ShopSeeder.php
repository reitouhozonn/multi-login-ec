<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 30; $i++) {

            DB::table('shops')->insert([
                [
                    'owner_id' => $i,
                    'name' => '店舗名',
                    'infomation' => 'お店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報ですお店の情報です',
                    'filename' => '',
                    'is_selling' => true,
                    'created_at' => '2021/01/01 11:11:11'
                ]
            ]);
        }
    }
}
