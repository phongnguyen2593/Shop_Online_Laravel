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
                'name' => 'Thùng 24 Lon Nước Tăng Lực Red Bull (250ml x24 Lon)',
                'slug' => 'thung-24-lon-nuoc-tang-luc-red-bull-250ml-x24-lon',
                'quantity' => 200,
                'user_id' => 1,
                'category_id' => 5,
                'status' => 1,
                'updated_at' => '2020-10-28 07:11:00'
            ],
            [
                'name' => 'Thùng 24 Lon Nước ngọt có gas Sprite lon Mi nhon (250ml x24)',
                'slug' => 'thung-24-lon-nuoc-ngot-co-gas-sprite-lon-mi-nhon-250ml-x24',
                'quantity' => 200,
                'user_id' => 1,
                'category_id' => 5,
                'status' => 1,
                'updated_at' => '2020-10-28 08:11:00'
            ],
            [
                'name' => 'Bánh Trứng tươi - Chà Bông KARO Richy',
                'slug' => 'banh-tuoi-karo',
                'quantity' => 200,
                'user_id' => 1,
                'category_id' => 3,
                'status' => 1,
                'updated_at' => '2020-10-28 08:15:00'
            ],
            [
                'name' => 'Túi 12 Thanh Socola KitKat',
                'slug' => 'tui-12-thanh-socola-kitkat',
                'quantity' => 200,
                'user_id' => 1,
                'category_id' => 3,
                'status' => 1,
                'updated_at' => '2020-10-28 08:16:00'
            ]
        ]);
    }
}
