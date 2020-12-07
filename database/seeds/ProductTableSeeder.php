<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name' => 'Thùng 24 Lon Nước Ngọt Có Gas Pepsi Vị Chanh',
                'slug' => 'dau-dau-nanh-simply-2l-chai',
                'quantity' => 200,
                'thumbnail' => 'uploads/products/thumbnail/e0e91ed65ef8a5661bd0a0c2bc8cb0f8.jpeg',
                'user_id' => 1,
                'category_id' => 6,
                'brand_id'  => 12,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            
        ]);
    }
}
