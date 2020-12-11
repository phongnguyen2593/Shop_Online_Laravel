<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class ImagesProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->truncate();
        DB::table('product_images')->insert([
            [
                'path' => 'uploads/products/images/0ed5d791d8f4fd1e804744bf884ca74f.jpeg',
                'product_id' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'path' => 'uploads/products/images/f94d90f873aa75aaba7364cc94a53cad.jpeg',
                'product_id' => 1,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'path' => 'uploads/products/images/3e2ee9c7ddf665a2233229fba7e0baee.jpeg',
                'product_id' => 2,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'path' => 'uploads/products/images/2e48945a8c46643cbb8a2afe8a299cdd.jpg',
                'product_id' => 6,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'path' => 'uploads/products/images/0592743e6c6fcf94dd86d846efe34098.jpg',
                'product_id' => 6,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'path' => 'uploads/products/images/0d0c65ea30cd8dec6a7b50234484b6e7.jpg',
                'product_id' => 6,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            [
                'path' => 'uploads/products/images/8709f0fa7ac0d5e85d3f4ecfc5c0f35e.jpg',
                'product_id' => 8,
                'updated_at' => '2020-10-28 07:11:00',
                'created_at' => '2020-10-28 07:11:00',
            ],
            
        ]);
    }
}
