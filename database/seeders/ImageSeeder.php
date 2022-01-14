<?php

namespace Database\Seeders;

use App\Services\ImageService;
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
        // ImageService::upload('dummy-200x200.png', 'products');

        for ($i = 1; $i < 7; $i++) {

            DB::table('images')->insert([
                [
                    'owner_id' => $i,
                    'filename' => 'sample_' . $i . '.jpg',
                    'title' => 'dummy' . $i,
                    'created_at' => '2021/01/01 11:11:11'
                ]
            ]);
        }
    }
}
