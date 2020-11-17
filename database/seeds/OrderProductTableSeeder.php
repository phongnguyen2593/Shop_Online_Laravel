<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class OrderProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_product')->truncate();
        DB::table('order_product')->insert([
            'order_id'      => 1,
            'product_id'    => 1,
            'quantity'      => 2,
            'sale_price'    => '30000',
            'total'         => '60000',  
        ]);
    }
}
