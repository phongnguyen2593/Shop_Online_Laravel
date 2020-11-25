<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('roles')->insert([
            'user_id'       => 1,
            'role'          => 1,
            'created_at'    => '2020-10-28 07:11:00',
            'updated_at'    => '2020-10-28 07:11:00',
        ]);

        for ($i=2; $i < 4; $i++) { 
            DB::table('roles')->insert([
                'user_id'       => $i,
                'role'          => 2,
                'created_at'    => '2020-10-28 07:11:00',
                'updated_at'    => '2020-10-28 07:11:00',
            ]);
        }

        for ($i=4; $i < 14; $i++) { 
            DB::table('roles')->insert([
                'user_id'       => $i,
                'role'          => 3,
                'created_at'    => '2020-10-28 07:11:00',
                'updated_at'    => '2020-10-28 07:11:00',
            ]);
        }
    }
}
