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
            
        ]);
    }
}
