<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            'customer_id'   => 1,
            'approver_id'   => 1,
            'payment'       => 1,
            'note'          => 'test',
            'status'        => 1,
            'created_at'    => '2020-10-28 07:11:00',
            'updated_at'    => '2020-10-28 07:11:00',
        ]);
    }
}
