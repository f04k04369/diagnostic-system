<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

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
            'company_name' => "株式会社BottoK",
            'email' => "1111111@gmail.com",
            'name' => "山田　太郎",
        ]);
    }
}
