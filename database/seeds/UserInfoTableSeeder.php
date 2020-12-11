<?php

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
        DB::table('user_info')->insert([
            'user_id'       => 1,
            'name'          => 'Phong',
            'gender'        => 1,
            'avatar'        => 'uploads/users/avatars/usdcvhvbsb82345637846534.png',
            'created_at'    => '2020-10-28 07:11:00',
            'updated_at'    => '2020-10-28 07:11:00',
        ]);

        for ($i=2; $i < 4; $i++) { 
            DB::table('user_info')->insert( [
                'user_id'   => $i,
                'name'      => Str::random(10),
                'gender'    => rand(0,1),
                'avatar'        => 'uploads/users/avatars/usdcvhvbsb82345637846534.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ]);
        }
        for ($i=4; $i < 14; $i++) { 
            DB::table('user_info')->insert( [
                'user_id'   => $i,
                'name'      => Str::random(10),
                'gender'    => rand(0,1),
                'avatar'        => 'uploads/users/avatars/usdcvhvbsb82345637846534.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ]);
        }
    }
}
