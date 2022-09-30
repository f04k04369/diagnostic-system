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
            'name' => "山田　太郎",
            'department_name' => "開拓部",
            'job_title' => "課長",
            'email' => "1111111@gmail.com",
            'phone_number' => "08011112222",
            'company_url' => "https://bottok.net/"
        ]);
    }
}
