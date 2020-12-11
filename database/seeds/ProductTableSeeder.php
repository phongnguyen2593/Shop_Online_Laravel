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
                'slug' => 'thung-24-lon-nuoc-ngot-co-gas-pepsi-vi-chanh',
                'quantity' => 200,
                'origin_price'      => 240000,
                'sale_price'        => 235000,
                'discount_percent'  => 2,
                'thumbnail' => 'uploads/products/thumbnail/e0e91ed65ef8a5661bd0a0c2bc8cb0f8.jpeg',
                'user_id' => 1,
                'category_id' => 6,
                'brand_id'  => 12,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'name' => 'Đồ Ăn Cho Mèo Trưởng Thành Me-O Vị Cá Ngừ (7kg)',
                'slug' => 'do-an-cho-meo-truong-thanh-me-o-vi-ca-ngu-7kg-p706046',
                'quantity' => 200,
                'origin_price'      => 769000,
                'sale_price'        => 415000,
                'discount_percent'  => 46,
                'thumbnail' => 'uploads/products/thumbnail/112206087a0506f2bad9f5b09a2a0c93.jpg',
                'user_id' => 1,
                'category_id' => 10,
                'brand_id'  => 13,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'name' => 'Đồ Ăn Cho Mèo Con Me-O Hương Vị Cá Biển (1.1Kg)',
                'slug' => 'do-an-cho-meo-con-me-o-huong-vi-ca-bien-1-1kg-p486865',
                'quantity' => 200,
                'origin_price'      => 135000,
                'sale_price'        => 109400,
                'discount_percent'  => 19,
                'thumbnail' => 'uploads/products/thumbnail/666d98bec5b2434a6866c6964cda75f3.jpg',
                'user_id' => 1,
                'category_id' => 10,
                'brand_id'  => 13,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'name' => 'Đồ Ăn Cho Mèo Trưởng Thành Me-O Vị Hải Sản (7kg)',
                'slug' => 'do-an-cho-meo-con-me-o-huong-vi-ca-bien-1-1kg-p486865',
                'quantity' => 200,
                'origin_price'      => 415000,
                'sale_price'        => 769000,
                'discount_percent'  => 46,
                'thumbnail' => 'uploads/products/thumbnail/1af0ab43e78069e42eeee8a64102174e.jpg',
                'user_id' => 1,
                'category_id' => 10,
                'brand_id'  => 13,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'name' => 'Thức ăn cho Mèo trưởng thành Me-O hương vị Cá Ngừ 1.2kg',
                'slug' => 'thuc-an-cho-meo-truong-thanh-me-o-huong-vi-ca-ngu-1-2kg',
                'quantity' => 200,
                'origin_price'      => 127800 ,
                'sale_price'        => 159000 ,
                'discount_percent'  => 20,
                'thumbnail' => 'uploads/products/thumbnail/5844ddf08e1dee9eeb697a001a29250e.jpg',
                'user_id' => 1,
                'category_id' => 10,
                'brand_id'  => 13,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'              => 'Thùng Mì Hảo Hảo Hương Vị Tôm Chua Cay (30 Gói/ Thùng)',
                'slug'              => 'thung-mi-hao-hao-huong-vi-tom-chua-cay-30-goi-thung-p68502459',
                'quantity'          => 200,
                'origin_price'      => 105000 ,
                'sale_price'        => 200000 ,
                'discount_percent'  => 48,
                'thumbnail'         => 'uploads/products/thumbnail/e7140799c5ad89dc50f253b6ba9cf3ae.jpg',
                'user_id'           => 1,
                'category_id'       => 11,
                'brand_id'          => 1,
                'status'            => 1,
                'updated_at'        => '2020-10-28 07:11:00',
                'created_at'        => '2020-10-28 07:11:00',
            ],
            [
                'name' => 'Thùng Mì Ly Modern Hương Vị Lẩu Thái Tôm (24 Ly x 67g)',
                'slug' => 'thung-mi-ly-modern-huong-vi-lau-thai-tom-24-ly-x-67g-p51852381',
                'quantity' => 200,
                'origin_price'      => 156000 ,
                'sale_price'        => 166000 ,
                'discount_percent'  => 6,
                'thumbnail' => 'uploads/products/thumbnail/a0287e02cb609666fe788dad90087534.jpg',
                'user_id' => 1,
                'category_id' => 11,
                'brand_id'  => 1,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'name' => 'Combo 5 Mì Lẩu Thái Tôm Vina Acecook Gói 80g',
                'slug' => 'thung-mi-ly-modern-huong-vi-lau-thai-tom-24-ly-x-67g-p51852381',
                'quantity' => 200,
                'origin_price'      => 27500 ,
                'sale_price'        => 27500 ,
                'discount_percent'  => 0,
                'thumbnail' => 'uploads/products/thumbnail/70ab6cc7f6f8bb69036ce0fc8f49f72e.jpg',
                'user_id' => 1,
                'category_id' => 11,
                'brand_id'  => 1,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            
        ]);
    }
}
