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
            'email' => 'phongnguyen2593@gmail.com',
            'name' => 'Phong',
            'role' => '1',
            'password' => bcrypt('123123123'),
        ]);

        //dung vong for de tao nhieu ban ghi
        for ($i=0; $i < 10; $i++) { 
            DB::table('users')->insert( [
                'email' => Str::random(10) . '@gmail.com',
                'name' => Str::random(10),
                'role' => '2',
                'password' => bcrypt('password')
            ]);
        }
    }
}
