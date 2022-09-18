<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
            'user_id' => '1',
            'point_1' => '5',
            'point_2' => '0',
            'point_3' => '10',
            'point_4' => '5',
            'point_5' => '0',
            'point_6' => '10',
            'point_7' => '5',
            'point_8' => '10',
            'point_9' => '5',
            'point_10' => '5',
            'total_point' => '55',
            'capture' => '/img/result_image_results.png'
        ]);
    }
}
