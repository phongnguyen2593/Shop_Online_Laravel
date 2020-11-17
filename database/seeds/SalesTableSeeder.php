<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->truncate();
        DB::table('sales')->insert([
            [
                'product_id'        => 1,
                'origin_price'      => 240000,
                'sale_price'        => 235000,
                'discount_percent'  => 2,
                'created_at'        => '2020-11-16 09:31:29',
                'updated_at'        =>  '2020-11-16 09:31:29',
            ],
            [
                'product_id'        => 2,
                'origin_price'      => 170000,
                'sale_price'        => 149000,
                'discount_percent'  => 12,
                'created_at'        => '2020-11-16 09:31:29',
                'updated_at'        =>  '2020-11-16 09:31:29',
            ],
            [
                'product_id'        => 3,
                'origin_price'      => 50000,
                'sale_price'        => 30000,
                'discount_percent'  => 40,
                'created_at'        => '2020-11-16 09:31:29',
                'updated_at'        =>  '2020-11-16 09:31:29',
            ],
            [
                'product_id'        => 4,
                'origin_price'      => 85000,
                'sale_price'        => 64000,
                'discount_percent'  => 25,
                'created_at'        => '2020-11-16 09:31:29',
                'updated_at'        =>  '2020-11-16 09:31:29',
            ]
        ]);
    }
}
