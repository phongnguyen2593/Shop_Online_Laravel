<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_info')->truncate();

        for ($i=0; $i < 10; $i++) { 
            DB::table('user_info')->insert([
                'user_id' => ($i+1),
                'fullname' => Str::random(10),
                'address' => Str::random(15)
            ]);
        }
    }
}
