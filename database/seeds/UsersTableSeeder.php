<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert( [
            'email'=>   'phongnguyen2593@gmail.com',
            'password'  => bcrypt('123123123'),
            'created_at' => '2020-10-28 07:11:00',
            'updated_at' => '2020-10-28 07:11:00',
        ]);

        for ($i=0; $i < 2; $i++) { 
            DB::table('users')->insert( [
                'email'     => Str::random(10) . '@gmail.com',
                'password'  => bcrypt('123123123'),
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ]);
        }

        for ($i=0; $i < 10; $i++) { 
            DB::table('users')->insert( [
                'email'     => Str::random(10) . '@gmail.com',
                'password'  => bcrypt('123123123'),
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ]);
        }
    }
}
